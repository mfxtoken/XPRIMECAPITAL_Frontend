# XPRIMECAPITAL Frontend

#### Web Public Area Frontend List
- [Home_Page](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Home_Page.html)
- [Account_Open_Demo](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Account_Open_Demo.html)
- [Account_Open_Live](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Account_Open_Live.html)
- [Account_Types](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Account_Types.html)
- [Products_Forex](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Products_Forex.html)
- [Products_Commodities](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Products_Commodities.html)
- [Products_Indices](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Products_Indices.html)
- [Products_Stock_CFDs](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Products_Stock_CFDs.html)
- [Products_Crypto](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Products_Crypto.html)
- [Investments_PAMM](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Investments_PAMM.html)
- [Investments_CopyTrade](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Investments_CopyTrade.html)
- [Partnership_Affiliate_IB](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Partnership_Affiliate_IB.html)
- [Partnership_Affiliate_Partner](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Partnership_Affiliate_Partner.html)
- [Research_News](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Research_News.html)
- [Research_News_Detail](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Research_News_Detail.html)
- [Research_Economic_Calendar](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Research_Economic_Calendar.html)
- [Research_Morning](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Research_Morning.html)
- [Education](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Education.html)
- [Company](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Company.html)
   

# NodeJS Kurulumu
  
### NodeJS Kurulumu  
Öncelikle **npm** paket yöneticimizin olması lazım, yoksa [NodeJS](https://nodejs.org/) ‘in resmi sitesi olan [nodejs.org](https://nodejs.org/en/download/)’tan NodeJS’i bilgisayarımıza yüklememiz gerek.  Yüklemeyi yaptıktan sonra _terminal_ yada _command prompt’_a  
  
     npm install --global gulp-cli  

yazmamız gerekmektedir. Bu sayade Gulp’un cli(Command Line Interface)sini bilgisayarımıza yüklemiş olacağız, bu bize Gulp’u terminalimizde **gulp** komutunu (command) kullanmamızı sağlıcaktır. Bu işlemi de yaptıktan sonra Gulp görevleri yazmaya başlayalım.  
  
  
#### Projeyi PC'ye İndirme  
Komut Satırına Aşağıdaki Kodu Yazın  

     git clone https://github.com/orcunkilicaslan/XPRIMECAPITAL_Frontend.git  

#### Projeyi PC'de Çalıştırma  
Komut Satırına Aşağıdaki Kodu Yazın  

     npm install
     npm install -g npm  


Projeyi Derleyecekseniz İse Komut Satırına Aşağıdaki Kodu Yazın  

     gulp build --production

Projede Çalışacaksanız İse Komut Satırına Aşağıdaki Kodu Yazın  

     gulp devel  