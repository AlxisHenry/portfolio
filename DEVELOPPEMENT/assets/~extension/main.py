from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By 
from selenium.webdriver.chrome.service import Service 
import os
import time

os.remove('Z:\CCI BTS COURS 2021\Ateliers de Professionnalisation\ATELIER 1 -- PORTFOLIO\CCI-2021-PORTFOLIO\DEVELOPPEMENT\@download\source_code\CCI-2021-PORTFOLIO-main.zip')

def recup_last_release_source_code():
    options = Options()
    options.add_argument("start-maximized")
    options.add_experimental_option("prefs", {
    "download.default_directory": "Z:\CCI BTS COURS 2021\Ateliers de Professionnalisation\ATELIER 1 -- PORTFOLIO\CCI-2021-PORTFOLIO\DEVELOPPEMENT\@download\source_code",
    "download.prompt_for_download": False,
    "download.directory_upgrade": True,
    "safebrowsing.enabled": True
    })
    options.add_argument("disable-infobars")
    options.add_argument("--disable-extensions")
    # options.add_argument('--headless')
    path = Service('DEVELOPPEMENT\~extension\@exe\chromedriver.exe')
    driver = webdriver.Chrome(options=options, service=path) 
    driver.get("https://github.com/AlxisHenry/CCI-2021-PORTFOLIO")
    driver.find_element(By.XPATH, '//*[@id="repo-content-pjax-container"]/div/div[2]/div[1]/div[1]/span/get-repo/details/summary').click() 
    driver.find_element(By.XPATH, '//*[@id="repo-content-pjax-container"]/div/div[2]/div[1]/div[1]/span/get-repo/details/div/div/div[1]/ul/li[3]/a').click()
    time.sleep(20)
    driver.quit()
    f = open('DEVELOPPEMENT\~extension\@logs\logs.txt', 'a')
    f.write(time.strftime('%Y-%m-%d' + " - " + '%H:%M:%S', time.localtime()) + " |==| SCRIPT FINISHED" ) # Save complete datetime
    f.close()

recup_last_release_source_code()