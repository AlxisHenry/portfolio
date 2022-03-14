from msilib.schema import PublishComponent
from time import sleep
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.service import Service

file = open('extension\scrap-data\scraping-v-juridique-links.txt', 'r')
tab = file.readlines()
file.close()

options = Options()

options.add_argument("start-minimized")

path = Service('extension\chromedriver.exe')

driver = webdriver.Chrome(options = options, service= path)


tab_without_doublons = []

for i in tab:
    if i not in tab_without_doublons:
        tab_without_doublons.append(i)

for article in tab_without_doublons:

    driver.get(article )

    try:
         Title = driver.find_element(By.CLASS_NAME, 'ctn-gen-titre').get_attribute('innerText').replace('&nbsp;', ' ').replace('"', '`')
         PublicationDate = driver.find_element(By.CLASS_NAME, 'ctn-gen-auteur').get_attribute('innerText').replace('&nbsp;', ' ').replace('"', '`')
         Introduction = driver.find_element(By.CLASS_NAME, 'ctn-gen-introduction').get_attribute('innerText').replace('&nbsp;', ' ').replace('"', '`')
         Tags = driver.find_element(By.CLASS_NAME, 'mots').find_element(By.TAG_NAME, 'ul').find_elements(By.TAG_NAME, 'li')
         f = open('extension\scrap-data\scraping-data.sql', 'a', encoding='utf8')
         f.write('INSERT INTO Articles (title, introduction, UrlArticle) VALUES ("' + Title + '","' + Introduction + '","' + article + '");') 
         f.write('INSERT INTO Images (LinkImage, AltImage) VALUES ("https://d1fmx1rbmqrxrr.cloudfront.net/zdnet/optim/i/edit/ne/2019/01/CNIL_620__w1200.jpg","Logo de la CNIL");\n')
         f.write('INSERT INTO Themes (Theme, ThemePrincipal) VALUES ("')
         for tag in Tags:
            f.write(tag.get_attribute('innerText').replace('#', ' ').replace('&nbsp;', ' ').replace('"', '`'))
         f.write('","Juridique"')
         f.write(');\n')
         f.write('INSERT INTO Dates (FullDate, UploadDate) VALUES ("' + PublicationDate + '","' + PublicationDate +'");\n')
         f.close()
    except:
         print('Cette page contient une erreur')

driver.quit()