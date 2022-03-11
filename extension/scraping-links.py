from time import sleep
from tokenize import Name
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.service import Service

tabs = ['https://www.franceinter.fr/theme/informatique',
        'https://www.franceinter.fr/theme/cybersecurite',
        'https://www.franceinter.fr/theme/jeux-video',
        'https://www.franceinter.fr/theme/numerique',
        'https://www.franceinter.fr/theme/cybercriminalite',
        'https://www.franceinter.fr/theme/hackers',
        'https://www.franceinter.fr/theme/google',
        'https://www.franceinter.fr/theme/donnees-personnelles',
        'https://www.franceinter.fr/theme/high-tech',
        'https://www.franceinter.fr/theme/technologie',
        'https://www.franceinter.fr/theme/realite-virtuelle',
        'https://www.franceinter.fr/theme/vie-connectee',
        'https://www.franceinter.fr/theme/smartphones',
        'https://www.franceinter.fr/theme/5g',
        'https://www.franceinter.fr/theme/telephonie',
        'https://www.franceinter.fr/theme/microsoft',
        'https://www.franceinter.fr/theme/sony',
        'https://www.franceinter.fr/theme/nintendo',
        'https://www.franceinter.fr/theme/twitter'
        ]

options = Options()
options.add_argument("start-minimized")

path = Service('./chromedriver.exe')
driver = webdriver.Chrome(options = options, service= path)

for tab in tabs:
    driver.get(tab )

    sleep(1)
    cards = driver.find_elements(By.CLASS_NAME, 'card-text-sub')

    for card in cards:
        f = open('./scraping-data/scraping-links.txt', 'a', encoding='utf8')
        if (card.get_attribute('href') == None):
            print("NoneType")
        else:
             if (card.get_attribute('href')).find("emissions") == -1:
                     f.write(card.get_attribute('href'))
                     f.write('\n')
                     f.close()
             else:
                     print("Found an emission")

driver.quit()