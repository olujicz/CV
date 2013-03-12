#!/bin/bash
# Check for dependency
command -v wkhtmltopdf >/dev/null 2>&1 || { echo "I require wkhtmltopdf but it's not installed. Aborting." >&2; exit 1; }
command -v php-cgi >/dev/null 2>&1 || { echo "I require php-cgi but it's not installed. Aborting." >&2; exit 1; }

# Insert configurations
source build.conf

# Functions

create_index () {
    echo "Creating index.html"
    php-cgi -q -f index.php > index.html 2> /dev/null
}

create_pdf (){
    echo "Creating pdf from html file"
    sed -i "/$LANG_BUTTON/ d" index.html
    sed -i "s/$HTML_1/Kontakt:/g" index.html
    sed -i "s/$ADDRESS_HTML/$ADDRESS_PDF/g" index.html
    wkhtmltopdf -l index.html $PDF_FILE
}

create_index_en () {
    echo "Creating index_en.html"
    php-cgi -q -f index.php lang=en > index_en.html 2> /dev/null
}

create_pdf_en () {
    echo "Creating pdf_en from html file."
    sed -i "/$LANG_BUTTON_EN/ d" index_en.html
    sed -i "s/$HTML_1_EN/Contact:/g" index_en.html
    sed -i "s/$ADDRESS_HTML_EN/$ADDRESS_PDF_EN/g" index_en.html
    wkhtmltopdf -l index_en.html $PDF_FILE_EN
}

srv_update () {
    scp index.php en.txt $PDF_FILE $PDF_FILE_EN $SRV_LOGIN:$SRV_PATH
}

copy_all () {
    scp index.php en.txt $PDF_FILE $PDF_FILE_EN head.png resume.css reset-fonts-grids.css $SRV_LOGIN:$SRV_PATH
}

print_help () {
    echo "Usage:"
    echo "-c    Create index and pdf."
    echo "-d    Deploy index and pdf to server."
    echo "-a    Deploy all files to server."
}

while getopts ":cda" opt; do
    case "$opt" in
        c)
             create_index;
             create_pdf;
             create_index_en;
             create_pdf_en;
             ;;

        d)
             srv_update;
             ;;

        a)
             copy_all;
             ;;

         ?)
             print_help;
             exit;
             ;;
    esac
done
