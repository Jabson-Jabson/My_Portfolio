<?php
// 🔹 მენიუ
$menuItems = [
  ["label" => "მთავარი", "url" => "index.php"],
  ["label" => "ჩემს შესახებ", "url" => "about.php"],
  ["label" => "ნამუშევრები", "url" => "works.php"],
  ["label" => "კონტაქტი", "url" => "contact.php"],
  ["label" => "რეზიუმე", "url" => "assets/resume/My_resume.pdf", "download" => true],
];


// 🔹 Hero სექცია
$heroData = [
  "greeting" => "გამარჯობა, მე ვარ",
  "roles" => ["ჯაბა მაისურაძე", "ვებ დეველოპერი", "WordPress Learner", "Frontend Developer"],
  "description" => "დამწყები ვებ დეველოპერი, რომელსაც უყვარს თანამედროვე ტექნოლოგიების შესწავლა. ვმუშაობ PHP-ზე, WordPress-ზე, HTML-ზე და CSS-ზე და ეტაპობრივად ვქმნი ჩემს პირველ პროექტებს.",
  "image" => "assets/images/jaba.jpg",
  "cv" => "assets/resume/My_resume.pdf"
];

// 🔹 About სექცია
$aboutData = [
  "title" => "ჩემს შესახებ",
  "text" => "მე ვსწავლობ ვებ დეველოპმენტს და უკვე ვქმნი მარტივ, მაგრამ სტრუქტურულ საიტებს. ჩემს ყოველდღიურ განვითარებაში HTML, CSS, WordPress და PHP თამაშობენ მთავარ როლს. ეს სფერო ჩემთვის მხოლოდ პროფესია კი არა — შემოქმედებითი გზა და შესაძლებლობაა იდეების ციფრულ ცხოვრებად ქცევის.",
  "image" => "assets/images/jabaa.jpg",
  "skills" => [
    ["name" => "HTML", "level" => 90],
    ["name" => "CSS", "level" => 80],
    ["name" => "WordPress", "level" => 70],
    ["name" => "PHP", "level" => 70],
  ],
  "facts" => [
    ["icon" => "fa-solid fa-map-marker-alt", "text" => "რუსთავი, საქართველო"],
    ["icon" => "fa-solid fa-code", "text" => "10+ პროექტი"],
    ["icon" => "fa-solid fa-graduation-cap", "text" => "SkillWill University"],
    ["icon" => "fa-solid fa-mug-hot", "text" => "Coffee = Coding fuel ☕"],
  ]
];

// 🔹 Why Me სექცია
$whyCards = [
  ["icon" => "fas fa-code", "title" => "სუფთა და სტრუქტურირებული კოდი", "text" => "ყოველი პროექტი იწერება ორგანიზებულად და ადვილად წასაკითხად, რაც უზრუნველყოფს გამართულ ფუნქციონირებასა და მომავალ განვითარებას."],
  ["icon" => "fas fa-lightbulb", "title" => "კრეატიული ხედვა", "text" => "ყოველი დიზაინი იქმნება ინდივიდუალურად — მომხმარებლის საჭიროებებსა და ბრენდზე მორგებით."],
  ["icon" => "fas fa-rocket", "title" => "შედეგზე ორიენტირებული მიდგომა", "text" => "მთავარი მიზანია ხარისხიანი UX/UI გამოცდილება და ფუნქციური, სწრაფი ვებსაიტები."],
  ["icon" => "fas fa-handshake", "title" => "პასუხისმგებლიანი თანამშრომლობა", "text" => "ყოველ პროექტში ვმუშაობ მაქსიმალური კომუნიკაციით, გამჭვირვალედ და დათქმულ ვადებში."],
];

// 🔹 Projects
$projects = [
  [
    "title" => "Bon Hotel",
    "subtitle" => "Home Page",
    "image" => "assets/images/Bon Hotel HomePage.jpeg",
    "github" => "https://github.com/Jabson-Jabson/Bon_Hotel.git"
  ],
  [
    "title" => "Bon Hotel New Page",
    "subtitle" => "New Page",
    "image" => "assets/images/Bon Hotel New Page.png",
    "github" => "https://github.com/Jabson-Jabson/Bon_Hotel_2.git"
  ],
  [
    "title" => "Portfolio Page",
    "subtitle" => "Web Development",
    "image" => "assets/images/mico-php-final-foto.jpeg",
    "github" => "https://github.com/Jabson-Jabson/mico-php-final.git"
  ],
  [
    "title" => "Business Site",
    "subtitle" => "Tourism",
    "image" => "assets/images/buenos aires foto.jpeg",
    "github" => "https://github.com/Jabson-Jabson/Buenos_Aires.git"
  ],
  [
    "title" => "Portfolio Website",
    "subtitle" => "Web Development",
    "image" => "assets/images/პორტფოლიო ვორდპრეს.jpeg",
    "github" => "https://github.com/Jabson-Jabson/Portfolio_Main-Page.git"
  ],
  [
    "title" => "Portfolio Page 2",
    "subtitle" => "Web Development",
    "image" => "assets/images/პორტფოლიო ვორდპრესის მეორე გვერდი.jpeg",
    "github" => "https://github.com/Jabson-Jabson/Portfolio_Main-Page.git"
  ],
  [
    "title" => "SkillWill",
    "subtitle" => "Education",
    "image" => "assets/images/SkillWill.png",
    "github" => "https://github.com/Jabson-Jabson/SkillWill_Project.git"
  ],
  [
    "title" => "Lux Ventus",
    "subtitle" => "Fashion",
    "image" => "assets/images/Lux_Ventus foto.jpeg",
    "github" => "https://github.com/MariamiTut/Lux_Ventus.git"
  ],
  [
    "title" => "Online Courses",
    "subtitle" => "Web Development",
    "image" => "assets/images/Online-Course-foto.jpeg",
    "github" => "https://github.com/SalomeSivsivadze12345678/Online-Course.git"
  ]
];

// 🔹 Contact
$contactInfo = [
  "phone" => "568887772",
  "email" => "maisuradzejaba01@gmail.com",
  "location" => "საქართველო – რუსთავი",
  "socials" => [
    ["icon" => "assets/images/facebook-removebg-preview.png", "url" => "https://facebook.com/yourprofile"],
    ["icon" => "assets/images/linkedin.png", "url" => "https://linkedin.com/in/jabamaisuradze"],
    ["icon" => "assets/images/instagram-removebg-preview.png", "url" => "https://instagram.com/yourprofile"],
    ["icon" => "assets/images/youtube-removebg-preview.png", "url" => "https://youtube.com/@yourchannel"]
  ],
  
  "map" => "https://www.google.com/maps?q=Rustavi,Georgia&output=embed"
];


?>

