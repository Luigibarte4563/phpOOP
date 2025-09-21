# Getting Started with PHP Programming

Welcome to your journey into PHP programming! This guide will help you set up your environment, write your first PHP program, and understand the tools beginners typically use.

---

## 1. What You Need

To start coding in PHP, you need:

1. **A Code Editor**  
   Recommended options:
   - [Visual Studio Code (VS Code)](https://code.visualstudio.com/) (lightweight and popular)
   - [Sublime Text](https://www.sublimetext.com/)
   - [PHPStorm](https://www.jetbrains.com/phpstorm/) (professional, paid)

2. **PHP Interpreter / Local Server**  
   PHP needs a server to run. Beginners usually install **XAMPP** or **MAMP**:
   - [XAMPP](https://www.apachefriends.org/index.html) (Windows, Linux, Mac)
   - [MAMP](https://www.mamp.info/en/) (Mac & Windows)

3. **Web Browser**  
   Any modern browser like Chrome, Firefox, or Edge will work.

---

## 2. Installing XAMPP (Example for Windows)

1. Download XAMPP from [here](https://www.apachefriends.org/download.html).  
2. Run the installer and follow instructions.  
3. Open the **XAMPP Control Panel** and start **Apache** (this starts your local server).  

---

## 3. Creating Your First PHP File

1. Open the **htdocs** folder in your XAMPP installation.  
   - Usually located at: `C:\xampp\htdocs`  
2. Create a folder for your project, e.g., `myfirstphp`.  
3. Inside the folder, create a file called `index.php`.  

```php
<?php
echo "Hello, PHP World!";
?>
```
## 4. Running Your PHP Code

1. Open your browser and go to:  
http://localhost/myfirstphp/index.php
You should see:
```php
Hello, PHP World!
