#!/bin/sh
#
# Program to create allprices.csv, which is an amalgamation of
# distributor pricelists used for import into mysql.
#
# Output file format
#
# supplier
# supplier code
# description
# buy price
# rrp price
# category
# manufacturer

PRICEDIR=/projects/pricing/Price_Lists
PROGDIR=/projects/pricing

WGET="wget -nv"

# Fetch latest updates?
FETCH=1

# Firstly, move the old price list aside
echo "Moving the old pricelist out of the way"
cd $PRICEDIR
rm -f allprices.csv.old
mv allprices.csv allprices.csv.old

# Now start actually retrieving/extracting price lists

echo "Updating XXX1 Pricelist"
cd $PRICEDIR/XXX1/
if [ $FETCH -eq 1 ]; then
    $WGET -O xxx1.csv -N http://www.xxx1.com.au/PL_New.asp?user=xxxx&pass=yyyy
fi
cd ..
perl $PROGDIR/csv_extractor.pl XXX1/xxx1.csv xxx1 >> allprices.csv

echo "Updating XXX2 Pricelist"
cd $PRICEDIR/XXX2/
if [ $FETCH -eq 1 ]; then
    $WGET -N http://www.xxx2.com.au/lcs/xxx2.xls
fi
cd ..
perl $PROGDIR/xls_extractor.pl XXX2/xxx2.xls xxx2 0,1+3,4,6,7 >> allprices.csv

echo "Updating XXX3 prices"
cd $PRICEDIR/XXX3/
if [ $FETCH -eq 1 ]; then
    $WGET -N --http-user=1111 --http-passwd=2222 ftp://1111:2222@ftp.xxx3.com.au/Resellers/Pricelists/XXX3.ZIP
    unzip -o XXX3.ZIP
fi
cd ..
perl $PROGDIR/csv_extractor.pl XXX3/XXX3.TXT xxx3 3,4+12,8,10,2,0 >> allprices.csv

# Now, compare the new pricelist with the old, and email the results to simon
cd $PRICEDIR
diff -ub allprices.csv.old allprices.csv | mail you@ifyoulike.com
cd $PROGDIR
