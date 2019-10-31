# Group Member Information
Student ID&nbsp;&nbsp;&nbsp;Name<br/>
s3511887&nbsp;&nbsp;&nbsp;Melvin Hong<br/>
s3656181&nbsp;&nbsp;&nbsp;Ezgi Orturk<br/>
s3678831&nbsp;&nbsp;&nbsp;Jun Wang Lew<br/>
s3614753&nbsp;&nbsp;&nbsp;Lin Yang<br/>
s3498087&nbsp;&nbsp;&nbsp;De Kang Zeng</br>

#Github Link
https://github.com/s3511887/Glaser-Lovebug


## Installation Guide
1. Update laravel files like vendor or sth</br>
```bash
composer update
```
</br>

2. To allow image upload save into file.</br>
```bash
composer require intervention/image
```
</br>

3. Open an image folder to save all the images upload into file.</br>
```bash
php artisan storage:link
```
</br>

4. Insert database.</br>
```bash
php artisan migrate
```
</br>

4.5 Preset accounts on admin and user.</br>
```bash
php artisan db:seed
```
</br>
Admin user:</br>
Act: admin@admin.com</br>
PW: admin</br>

Normal User:</br>
Act: user@user.com</br>
PW: user</br>

5. Create profile images path.</br>
1)Create Profile_Picture folder under Glaser-Lovebug/public</br>
2)Create Profile_Picture and storage folder under Glaser-Lovebug/public/storage</br>
3)Create Profile_Picture folder under Glaser-Lovebug/public/storage/storage</br>
</br>


6. Run the website.</br>
```bash
php artisan serve
```
</br>


