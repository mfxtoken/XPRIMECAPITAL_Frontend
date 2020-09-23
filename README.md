# XPRIMECAPITAL Frontend

#### Web Public Area Frontend List
 - [Home_Page](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Home_Page.html)
 - [Account_Open_Demo](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Account_Open_Demo.html)
 - [Partnership_Affiliate_IB](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Partnership_Affiliate_IB.html)
 - [Research_News](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Research_News.html)
 - [Research_News_Detail](https://orcunkilicaslan.github.io/XPRIMECAPITAL_Frontend/html/Research_News_Detail.html)
   

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