from hashlib import new
from time import sleep
from tokenize import Name
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.service import Service

# Récupération des données de tous les sujets récupérés dans le ficheir scraping-links.

file = open('scraping-links.txt', 'r')
tab = file.readlines()
file.close()

f = open('./try.txt', 'a')

tab_without_doublons = []

tab_without_doublons.append(tab[0])

options = Options()
options.add_argument("start-minimized")

path = Service('./chromedriver.exe')
driver = webdriver.Chrome(options = options, service= path)

driver.get(tab_without_doublons[0])
driver.find_element(By.XPATH, '/html/body/div[1]/div/div/div/div/div/div[2]/button[3]').click()

tab_without_doublons = []

for i in tab:
    if i not in tab_without_doublons:
        tab_without_doublons.append(i)

for tabs in tab_without_doublons:
    driver.get(tabs )
    sleep(2.5)
    title = driver.find_element(By.XPATH, '/html/body/main/div[3]/div/h1').get_attribute('innerHTML')
    author = driver.find_element(By.CLASS_NAME, 'light-cover-info-authors').get_attribute('innerText')
    image = driver.find_element(By.XPATH, '/html/body/main/div[4]/div/article/figure/picture/img').get_attribute('src')
    alt = driver.find_element(By.XPATH, '/html/body/main/div[4]/div/article/figure/picture/img').get_attribute('alt')
    themes = driver.find_element(By.CLASS_NAME, 'simple-list').get_attribute('innerText')
    date = driver.find_element(By.CLASS_NAME, 'light-cover-info').get_attribute('innerText')
    dates_format = driver.find_elements(By.TAG_NAME, 'time')
    f = open('./scraping-data.txt', 'a', encoding='utf8')
    f.write( 'Titre: ' + title + '\n')
    f.write( 'Auteur: ' + author + '\n')
    f.write( 'link: ' + tabs)
    f.write( "Liens vers l'image: " + image + '\n')
    f.write( "Alt de l'image: " + alt + '\n')
    f.write( "Thèmes: " + themes + '\n')
    f.write( "Date: " + date + '\n')
    for dates in dates_format:
        if (dates.get_attribute('datetime') == None):
            print('Date non présente')
        else:
            f.write( "Date_Format : " + dates.get_attribute('datetime') + '\n')
    f.write('\n')
    f.close()
    sleep(1)

driver.close()