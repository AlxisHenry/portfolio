#!/usr/bin/env python

from selenium import webdriver # for webdriver
from datetime import datetime # for complete date
from selenium.webdriver.chrome.options import Options # for set options chrome on VM
# from selenium.webdriver.common.keys import Keys # for use Keys.{} function
from selenium.webdriver.common.by import By # for use By.{} function
from selenium.webdriver.chrome.service import Service # for use Service() function
import time # for hours
import os   # for delete files

objet_file = open("/var/www/html/cgi-enabled/transfert/objet.txt", "r")
objet = str(objet_file.read())
quantity_achats_file = open("/var/www/html/cgi-enabled/transfert/quantity.txt", "r")
quantity_achats = int(quantity_achats_file.read())
order_number_give_file = open("/var/www/html/cgi-enabled/transfert/order.txt", "r")
order_number_give = str(order_number_give_file.read())


def modification_accesories(objet, quantity_achats, order_number_give):

    os.remove("/var/www/html/cgi-enabled/transfert/objet.txt") # remove transfert file of objet
    os.remove("/var/www/html/cgi-enabled/transfert/quantity.txt") # remove transfert file of quantity
    os.remove("/var/www/html/cgi-enabled/transfert/order.txt") # remove transfert file of order number

    # Set Options of Chrome for VM:
    options = Options() # Will take list of options we need, list of options:
    options.add_argument("start-maximized")
    options.add_argument("disable-infobars")
    options.add_argument("--disable-extensions")
    options.add_argument('--headless')
    #

    path = Service('/var/www/html/cgi-enabled/utilities/chromedriver') # Path to VM's driver
    # path = Service('chromedriver.exe') # Path to Host's driver
    driver = webdriver.Chrome(options=options, service=path) # VM's webdriver start
    #driver = webdriver.Chrome(service=path) # Host's webdriver start
    driver.get("http://192.168.43.223/accessories/" + objet + "/edit") # Start Accessory's Web Page
    driver.find_element(By.XPATH, '//*[@id="username"]').send_keys("TIMKEN") # Locate Username's Input & Send Username
    driver.find_element(By.XPATH, '//*[@id="password"]').send_keys("TIMKEN2021") # Locate Password's Input & Send Password
    find_username = driver.find_element(By.XPATH,'//*[@id="username"]').get_attribute("value") # Save value of Username's Input
    driver.find_element(By.XPATH, '/html/body/form/div/div/div/div/div[3]/button').click() # Locate Connection's Input & Click on Him
    find_objet_title = driver.find_element(By.XPATH, '//*[@id="name"]').get_attribute("value") # Save Accessory's name value
    date = datetime.today().strftime('%Y-%m-%d') # Save date time
    driver.find_element(By.XPATH, '//*[@id="purchase_date"]').clear() # Locate Date's Input & Clear Input
    driver.find_element(By.XPATH, '//*[@id="purchase_date"]').send_keys(date) # Same but Send New Date
    order_number = str(order_number_give)
    driver.find_element(By.XPATH, '//*[@id="order_number"]').clear() # Locate Order-Number's Input & Clear Input -- OK: input clear
    driver.find_element(By.XPATH, '//*[@id="order_number"]').send_keys(order_number_give) # Same but Send New Order-Number -- NOT OK: can't send var
    quantity_exist = driver.find_element(By.XPATH, '//*[@id="qty"]').get_attribute("value") # Save Value of Quantity already in stock
    quantity_total = int(quantity_exist) + (quantity_achats) # Add quantity existing & quantity purchased
    driver.find_element(By.XPATH, '//*[@id="qty"]').clear() # Locate Quantity's existing Input & Clear 
    driver.find_element(By.XPATH, '//*[@id="qty"]').send_keys(quantity_total) # Same but change Quantity total change
    driver.find_element(By.XPATH, '//*[@id="create-form"]/div/div[2]/div[14]/button').click() # Locate Save's Button & Click on him
    # f = open('export.txt','a') # Link Host's Export File
    f = open('/var/www/html/cgi-enabled/logs/export.txt', 'a') # Link VM's Export File
    f.write("\n" + find_username + " |==| ") # Save Username
    f.write(str(find_objet_title) + " |==| ") # Save Name of Objet
    f.write(time.strftime('%Y-%m-%d' + " - " + '%H:%M:%S', time.localtime()) + " |==| ") # Save complete datetime
    f.write("order nb: " + str(order_number_give) + " |==| ") # Save Order Number
    #f.write(" order nb: " + "oazndoazb" + " |==| ") # Test Order Number
    f.write(" qty pos: " + quantity_exist + " |==| ") # Save existing quantity
    f.write(" qty buy: " + str(quantity_achats) + " |==| ") # Save quantity purchased
    f.write(" qty tot: " + str(quantity_total) + " [ DONE ] ") # Save quantity total
    f.close() # Close export File
    driver.quit() # Quit Driver And Finish Function


modification_accesories(objet, quantity_achats, order_number_give) # Start function with php var
# modification_accesories("2","2000","ZENAOZEAZE") # Test function with random values


