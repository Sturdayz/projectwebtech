# projectwebtech

กลุ่ม สู้ๆนะ 
1.กานต์ กานต์สิรี (ทำส่วน ui และ design ทั้งหมด,login google)
2.แซท นักกระวี (ทำ admin และ teacher,login google)
3.ไอซ์ กวิน (ทำ student และ behavior)

username&password admin --> admin,1234

https://auth-db166.hostinger.in.th/sql.php?server=1&db=u905601922_karn2&table=googlelogin&pos=0 ลิ้งดาต้าเบสออนไลน์เพื่อเช็คข้อมูล username&password ของดาต้าเบสออนไลน์ --> u905601922_karn2,ttT01EdpEGnu

ถ้าจะทำการล็อคอินด้วย mail ku ต้องเข้าไปที่ google api และทำการสมัครข้อมูลเพื่อใช้บริการของ google api หลังจากนั้นให้นำ clientId,clientSecret ที่ได้จาก google api ไปใส่ในโฟลเดอร์ googlelogin/gpConfig.php และนำ URL ที่ต้องการรันหน้าเว็บหลังจากทำการล็อคอินแล้วไปใส่ ใน google api และใส่ใน redirectURL ที่โฟลเดอร์ googlelogin/gpConfig.php เหมือนเดิมก็จะทำการล็อคอินด้วยกูเกิ้ล api ได้

ฟีเจอร์หลักๆทำไว้เกือบครบแล้วแต่อาจจะยังไม่สมบูรณ์ 100% แต่ว่าหลักๆแล้วสามารถใช้ได้ทุกหน้าที่มีอยู่ในหน้าเว็บ

upload csv มี 2 ไฟล์ในโฟลเดอร์ controller มี dataadmin,datateacher
โดย dataadmin จะต้องใส่ รหัสนิสิต,type (เอาไว้เช็คค่าตอนล็อคอิน),ชื่อนิสิต,อีเมลล์นิสิต
    datateacher จะต้องใส่ รหัสวิชา,ชื่อวิชา,อาจารย์ผู้สอน,รหัสนิสิต,ชื่อนิสิต

โฟลเดอร์ที่ชื่อ prowebtech คือโฟลเดอร์สุดท้ายที่รวมโค้ดของทุกคนเอาไว้แล้ว
