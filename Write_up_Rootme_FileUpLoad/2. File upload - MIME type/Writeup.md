## Challenge : File upload - MIME type
Author : g0uZ
Statement :
- Your goal is to hack this photo galery by uploading PHP code.
- Retrieve the validation password in the file .passwd.

**Giải quyết:**
Ở challenge này ta nhận được giao diện upload file như sau :
![Alt text](image.png)



Ta sẽ upload một file php với nội dung tương tự bài trước để lấy flag :
![Alt text](image-1.png)

Ở đề bài này thì chỉ những file có type là GIF, JPEG hoặc PNG mới được chấp nhận. Điều này ta có thể xử lí bằng cách dùng Burp Suit để `Content-Type` trước khi gửi lên server :

![Alt text](image-4.png)

Ta đã upload thành công 
![Alt text](image-3.png)

Truy cập vào file upload đã upload ta được flag : a7n4nizpgQgnPERy89uanf6T4 