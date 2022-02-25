# e-arsip
PROYEK TUGAS REKAYASA PERANGKAT LUNAK


## Role Pembagian Tugas
1. Ahmad Raihan | Testing dan Server
2. Adam Satrio Kanza | Fronted-End
3. Fidya Nur Styaningsih | Fronted-End
4. Nur Afan Syarifudin | Project Manager, Back-End
5. Wiyan Herra Herviana | Database


## requirements (wajib install) 
1. git && github https://git-scm.com/download/win
2. laragon https://github.com/leokhoa/laragon/releases/download/5.0.0/laragon-wamp.exe || xampp https://www.apachefriends.org/xampp-files/7.4.27/xampp-windows-x64-7.4.27-2-VC15-installer.exe
3. composer 2 https://getcomposer.org/Composer-Setup.exe
4. vscode https://code.visualstudio.com/Download
5. mysql 5.7.33 (incllude di web server || install sendiri)
6. php 7.4.19 (include di web serve || install sendiri)

## Install Laravel
 0. wajib punya Git dan akun Github 
 1. masukkan ```git clone https://github.com/Afansyarifudin/legalisir-app.git```
 2. Run ```composer update``` pada cmd di folder project. kalo error coba ```composer install --ignore-platform-reqs``` or ```composer update --ignore-platform-reqs```
 3. Copy file .env "cp .env.examples .env" 
 4. Atur file .env (Nama APP_NAME=e-arsip, DB_DATABASE=e-arsip)
 5. Run ```php artisan key:generate```
 6. Buat Database sesuai variable .env yang dibuat tadi
 7. Setelah Kalian mengatur .env yang ada jangan lupa untuk menjalankan command berikut
    "php artisan migrate:fresh --seed"
    gunanya untuk merefresh database yang ada dan memberikan seed untuk user login and register (biar bisa di masukin ke dalam table users)
 8. Happy Coding!


## Upload Project -> github 
1. Git Pull (update kode lokal dengan perbaruan yang ada di lokal)
2. Upload perubhan kode ke dalam Staged 
3. Push perubahan kode ke branch yang kalian buat 
4. Refresh code 


## merge branch to main 
1. pastikan kode di branch kalian siap dan tidak ada bug/ eror 
2. create pull request 
3. merge branch to main


## Todo before Develop (PESAN PENTING!!!)
 0. ```git pull``` dulu
 1. project ter clone dan sudah update dependecies (composer update)
 2. Wajib buat "BRANCH" baru dan commit pada branch itu (nama branch = bagian yang sedang dikerjakan. misal User Service dll)
 3. Commit seuai dengan arahan issue (wajib)
 4. Sematkan pesan commit sesuai docs github (agar terhubung dengan issue yang dibuat) (pelajari: https://github.blog/2011-04-09-issues-2-0-the-next-generation/ https://stackoverflow.com/questions/1687262/link-to-the-issue-number-on-github-within-a-commit-message)
 5. Dilarang ikut campur terhadap branch orang lain (ditakutkan terjadi conflict) jika ingin memberi masukkan bisa via issue comment 
 
(copy from K. Umam)
 
 ## Alur develop 
 menggunakan Git flow https://nvie.com/posts/a-successful-git-branching-model/
 1. nanti setiap role dibreakdown dlu 
 2. Setiap Orang mengeerjakan model/ servisnya sesuai di trello 


## lain-lain 
1. link trello : https://trello.com/invite/b/lrKS1UgR/8f9577df43bb9ffa0a8f374f23f11b5c/legalisir-app
2. Figma : https://www.figma.com/file/MxvCep5YCsGC6YU4rQWXoQ/legalisir-app
3. Link Template : 




