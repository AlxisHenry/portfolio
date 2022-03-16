from time import sleep
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.service import Service

options = Options()
options.add_argument("start-minimized")

path = Service('extension\chromedriver.exe')
driver = webdriver.Chrome(options = options, service= path)

tabs = [ 
    'https://www.cnil.fr/fr/tag/Intelligence+artificielle',
    'https://www.cnil.fr/fr/tag/Algorithmes',
    'https://www.cnil.fr/fr/tag/Cloud',
    'https://www.cnil.fr/fr/tag/Blockchain',
    'https://www.cnil.fr/fr/tag/Biom%C3%A9trie',
    'https://www.cnil.fr/fr/tag/Reconnaissance+faciale',
    'https://www.cnil.fr/fr/tag/Cookies+et+traceurs',
    'https://www.cnil.fr/fr/tag/Technologies',
    'https://www.cnil.fr/fr/tag/civic+tech',
    'https://www.cnil.fr/fr/tag/Cybers%C3%A9curit%C3%A9',
    'https://www.cnil.fr/fr/tag/S%C3%A9curit%C3%A9+informatique',
    'https://www.cnil.fr/fr/tag/Mots+de+Passe'
]

for tab in tabs:
    driver.get(tab )

    if (len(driver.find_elements(By.CLASS_NAME, 'views-row')) < 6):
        print('Only one page of articles on this page')
    else:
        while (driver.find_element(By.CLASS_NAME, 'pager-next').get_attribute('innerText') == 'Afficher plus'):
                sleep(4)
                if (driver.find_element(By.CLASS_NAME, 'pager-next').get_attribute('innerText') == 'Fin des résultats'):
                    print('Fin de page')
                elif (driver.find_element(By.CLASS_NAME, 'pager-next').get_attribute('outerHTML') == '<li class="pager-next first last">&nbsp;</li>'):
                    print('Fin de page')
                else:
                    next = ((driver.find_element(By.CLASS_NAME, 'pager-next')).find_element(By.TAG_NAME, 'a')).click()

    view = driver.find_elements(By.CLASS_NAME, 'views-row')

    f = open('extension\scrap-data\scraping-v-juridique-links.txt', 'a', encoding='utf8')

    for views in view:
        f.write((views.find_element(By.TAG_NAME, 'a')).get_attribute('href') + '\n')

    f.close()
    driver.quit()