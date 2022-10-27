
@echo off
set /p name="Nama folder: "
mklink /J "%name%" "D:\Software\XAMPP\htdocs\pweb\%name%"
mkdir "D:\Software\XAMPP\htdocs\pweb\%name%"