from distutils.command.upload import upload
from time import sleep
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.service import Service

file = open('extension\scrap-data\scraping-v-technologique-links.txt', 'r')
tab = file.readlines()
file.close()

tab_without_doublons = []

tab_without_doublons.append(tab[0])

options = Options()
options.add_argument("start-minimized")

path = Service('extension\chromedriver.exe')
driver = webdriver.Chrome(options = options, service= path)

driver.get(tab_without_doublons[0])
driver.find_element(By.XPATH, '/html/body/div[1]/div/div/div/div/div/div[2]/button[3]').click()

tab_without_doublons = []

for i in tab:
    if i not in tab_without_doublons:
        tab_without_doublons.append(i)

for tabs in tab_without_doublons:
    driver.get(tabs )
    title = driver.find_element(By.XPATH, '/html/body/main/div[3]/div/h1').get_attribute('innerHTML').replace('&nbsp;', ' ').replace('"', '`')
    author = driver.find_element(By.CLASS_NAME, 'light-cover-info-authors').get_attribute('innerText').replace('"', '`')
    image = driver.find_element(By.XPATH, '/html/body/main/div[4]/div/article/figure/picture/source').get_attribute('srcset')
    alt = driver.find_element(By.XPATH, '/html/body/main/div[4]/div/article/figure/picture/img').get_attribute('alt').replace('"', '`')
    themes = driver.find_element(By.CLASS_NAME, 'simple-list').get_attribute('innerText').replace('"', '`')
    date = driver.find_element(By.CLASS_NAME, 'light-cover-info').get_attribute('innerText').replace('"', '`')
    dates_format = driver.find_elements(By.TAG_NAME, 'time')
    f = open('extension\scrap-data\scraping-data.sql', 'a', encoding='utf8')
    
    if (image.find('data:image/jpeg;base64,') == -1):
        f.write('INSERT INTO Articles (title, author, UrlArticle) VALUES ("' + title + '","' + author + '","' + tabs + '");')
        f.write('INSERT INTO Images (LinkImage, AltImage) VALUES ("' + image + '","' + alt + '");\n')
        f.write('INSERT INTO Themes (Theme, ThemePrincipal) VALUES ("' + themes + '"," Technologique ");\n')
        if (len(dates_format) == 1):
            for dates in dates_format:  
                if (dates.get_attribute('datetime') == None):
                 UpdateDate = 'none'
                 UploadDate = 'none'
            else:
                UpdateDate = 'none'
                UploadDate = dates.get_attribute('datetime')
            f.write('INSERT INTO Dates (FullDate, UpdateDate, UploadDate) VALUES ("' + date + '","' + UpdateDate + '","' + UploadDate + '");\n')
        else:
            f.write('INSERT INTO Dates (UpdateDate, UploadDate, FullDate) VALUES ("')
            for dates in dates_format:
                 f.write(dates.get_attribute('datetime') + '","')
            f.write(date + '");\n')
        f.close()
    else:
        print('Erreur de lien, non ajouté à la liste')

    sleep(1)

driver.close()
