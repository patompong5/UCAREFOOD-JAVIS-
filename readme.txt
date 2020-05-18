instruction สำหรับการใช้งานเว็บไซต์ Ucare_food
1. ติดตั้ง Xampp
- ดาวน์โหลดโปรแกรมจากเว็บไซต์ https://www.apachefriends.org/download.html แล้วติดตั้ง
2. โหลดไฟล์โปรแกรม Ucare_food จาก Github 
- โดยไปที่เว็บไซต์ https://github.com/patompong5/UCAREFOOD-JAVIS-  จากนั้นกดดาวน์โหลดไฟล์ zip ลงใน root path ของ Xampp ยกตัวอย่างเช่น C:\xampp\htdocs
3. รันโปรแกรม Xampp
- กด start ที่ Apache กับ MySQL
- กด Admin ที่ Apache
- กดคลิกที่ phpMyAdmin
4. สร้าง database ชื่อ base_food
- กด new จากนั้นใส่ชื่อ base_food แล้วกด create 
- import ไฟล์ base_food_structure.sql กด go 
- import base_food_data.sql กด Enable foreign key checks ออก แล้วกด go
5. เข้า Netbeans IDE
- กด file กด Import Project from ZIP 
- ใน ZIP File กด Browse ไฟล์ UCAREFOOD-JAVIS--master.zip ที่อยู่ในโฟลเดอร์ htdocs ใน root path ของ Xampp
- ใน Folder กด browse โฟลเดอร์ htdocs ใน root path ของ Xampp
- กด import
6. รันโปรแกรม
- กด Run Project
- ที่ Projrct URL ใส่ http://localhost/UCAREFOOD
- ที่ Index File ใส่ Login.php
- กด Run เพื่อเข้าสู่หน้าเว็บไซต์