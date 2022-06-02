#!/usr/bin/perl -w

use strict;
#use Text::CSV;
use Text::CSV_XS;
use HTML::Entities;

my $output = "";
my $file;
#my $csv = Text::CSV->new();
my $csv = Text::CSV_XS->new({
                'quote_char'  => '"',
                'escape_char' => '"',
                'sep_char'    => "\t",
                'binary'      => 0
            });

my $valid;
my $col;
my $temp;
my $cols;
my $oWkC;
my $value;

die "You must provide a filename to $0 to be parsed as a csv file" unless @ARGV;

open(FH, $ARGV[0]);
while (<FH>) {

    $csv->parse($_);
    my @cells = $csv->fields;

    $valid = 0;
    $output = $ARGV[1];

    if (defined($ARGV[2])) {
        foreach $col (split(/,/, $ARGV[2])) {
            $output .= ",\"";
            $temp = '';
                
            if ($col =~ /\+/) {
                #$output .= "\"";
                foreach $cols (split(/\+/, $col)) {
                    $oWkC = $cells[$cols];
                    #print "( $iR , $iC ) =>", $oWkC->Value, "\n" if($oWkC);
                    $output .= strip($oWkC) . " " if ($oWkC);
                }
                $output .= "\"";
                    
            } else {
                #$output .= "\"";
                if (substr($col,0,1) eq 'E') {
                    $col = substr($col,1);
                    $oWkC = $cells[$col];
                    if ($oWkC) {
                        $value = striptonum($oWkC);
                        
                        if ($value) {
                            $temp = ($value * 1.1);
                            #print $temp . "\n";
                        }
                        
                    } else {
                        $value = 0;
                    }
                    
                } else {
                    $oWkC = $cells[$col];
                    $temp = $oWkC if ($oWkC);
                }
                    
                #print "( $iR , $iC ) =>", $oWkC->Value, "\n" if($oWkC);
                #$output .= "\"";
                $output .= strip($temp) if ($temp);
                $output .= "\"";
            }
                
            if ($temp) {
                $valid = 1;
            }
        }
    #} else {
    #    $oWkC = $cells[$iC];
    #    #print "( $iR , $iC ) =>", $oWkC->Value, "\n" if($oWkC);
    #    $output .= strip($oWkC) . "\"" if ($oWkC);
    }
    
    if ($valid) {
        print "$output\n";
    }
}

sub strip {
    my ($string) = @_;
    
    $string =~ s/\"//g;
    $string =~ s/^\s+//g;
    $string =~ s/\s+$//g;
    $string =~ s/[\$\,]//g;

    decode_entities($string);

    return $string;
}

sub striptonum {
    my ($string) = @_;
    
    #$string =~ s/[\s\$A-Za-z,\-:\/\@\"]//g;
    $string =~ s/^[0-9\.]//g;
    $string =~ s/[\$\,]//g;
    #$string = getnum($string);
    
    return $string;
}

