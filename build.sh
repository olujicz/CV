#!/bin/bash
# Check for dependency
command -v wkhtmltopdf >/dev/null 2>&1 || { echo "I require wkhtmltopdf but it's not installed. Aborting." >&2; exit 1; }

# Insert configurations
source build.conf

# Functions
create_index () {
    cp themplate.html index.html
    sed -i "s/%{CONTACT_FIRST_LINE}/$HTML_1/g" index.html
    sed -i "s/%{CONTACT_ADDRESS}/$ADDRESS_HTML/g" index.html
}

create_pdf () {
    cp themplate.html pdf.html
    sed -i "s/%{CONTACT_FIRST_LINE}/Kontakt:/g" pdf.html
    sed -i "s/%{CONTACT_ADDRESS}/$ADDRESS_PDF/g" pdf.html
    wkhtmltopdf -l pdf.html $PDF_FILE
    rm pdf.html
}

srv_update () {
    scp index.html $PDF_FILE $SRV_LOGIN:$SRV_PATH
}

copy_all () {
    scp index.html $PDF_FILE head.png resume.css reset-fonts-grids.css $SRV_LOGIN:$SRV_PATH
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
