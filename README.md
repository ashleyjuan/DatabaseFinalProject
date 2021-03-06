# 高師宅急便

開發人員：高雄師範大學 軟工二 阮奕瑄 吳振宏

資料庫使用:
[140.127.74.186]()
410977002
<hr>

## ㄧ、軟體定位

此系統為包裹追蹤系統，使用者進行登入後可查看包裹資訊。

## 二、使用工具

使用
![](https://img.shields.io/badge/html-86.3%25-red)
及
![](https://img.shields.io/badge/php-13.7%25-blue)
進行開發
<br>使用
![](https://img.shields.io/badge/Bootstrap-5.1-blueviolet)
、
![](https://img.shields.io/badge/jQuery-3.5-blue)
、
![datatable](https://img.shields.io/badge/DataTables-1.12.1-green)
套件
## 三、使用說明

### 可分為三方使用者：

### 管理者：

可查看訂單編號、包裹類型、金額、重量、目的地、抵達地、寄件人、收件人、寄件時間等資訊，另外可查看顧客過去一年包裹數量及消費金額、位在預計時間到達的包裹。
### 顧客：

* 查看訂單編號、包裹類型、重量、寄件時間、運輸狀態等資訊

* 進行訂貨、填寫包裹資料（開發中）

* 更改帳戶資料（開發中）

* 註冊帳戶（開發中）


### 快遞：

查看送貨包裹資訊、更改包裹狀態。

## 四、Demo演示

![alt text](https://github.com/ashleyjuan/DatabaseFinalProject/blob/master/login.png?raw=true)

一開始進行登入，系統會根據使用者身份跳轉至不同頁面

### 管理者：

![alt text](https://github.com/ashleyjuan/DatabaseFinalProject/blob/master/package.png?raw=true)

可在登入後查看貨品資訊，在右上方搜尋列中搜尋需要的資訊。

### 顧客：

![alt text](https://github.com/ashleyjuan/DatabaseFinalProject/blob/master/customer.png?raw=true)

可在登入後查看貨品資訊，了解每個貨品的運送資訊，在右上方搜尋列中搜尋需要的資訊。

### 快遞：

![alt text](https://github.com/ashleyjuan/DatabaseFinalProject/blob/master/shipper.png?raw=true)

在登入後查看需寄送及已寄送完的包裹，點選訂單編號可更改貨品的運送狀態，在右上方搜尋列中搜尋需要的資訊。

![alt text](https://github.com/ashleyjuan/DatabaseFinalProject/blob/master/success.png?raw=true)

點選確認後會送出進行更改，頁面也會重整顯示最新資訊。

最後，顧客可以進行登出，而跳回登入畫面。

