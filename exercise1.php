<?php 

// Activity 1
// A program that sets 2 variable $first_name and $last_name with name values. printing a string with variable names spaced
// plus the length of strings

$first_name = 'Ayume';
$last_name = 'Francis';

$combined =  $first_name . ' ' . $last_name;
$name = "$first_name $last_name";
$combined_length = strlen($combined);

print $name;
print '<br>';
print $combined;
print '<br>';
print '<br>';
print $combined_length;

print '<br>';
print '<br>';
print '***************************************************************';

/* Activity 2
 A program that uses the increament operator ++ and combined multiplication operator (*=) to print numbers from 1 - 5 and 
 powers of 2 from 2 to 32 */

$_my_num = 0;
$_raised = 1;
$_num2 = 2;

if ($_my_num != 1){
    $_my_num ++;
    print '<br>';
    print '<br>';
    print $_my_num;
    
    if ($_my_num == 1){
        $_my_num ++;
        print '<br>';
        print '<br>';
        print $_my_num;
        
        if ($_my_num == 2){
            $_my_num ++;
            print '<br>';
            print '<br>';
            print $_my_num;
                
            if ($_my_num == 3){
                $_my_num ++;
                print '<br>';
                print '<br>';
                print $_my_num;
                
                if ($_my_num == 4){
                    $_my_num ++;
                    print '<br>';
                    print '<br>';
                    print $_my_num;   
                }
            }
        }
    }

}

// Not complete to be worked on 
if ($_raised == 1){
    print '<br>';
    print '<br>';
    print '<br>';
    print '<br>';
    print $_num2 *= $_raised;
    $_raised ++;


    if ($_raised == 2){
        print '<br>';
        print '<br>';
        print $_num2 *= $_raised;
        $_raised ++;

        if ($_raised == 3){
            print '<br>';
            print '<br>';
            print $_num2 *= $_raised;
            $_raised ++;

            if ($_raised == 4){
                print '<br>';
                print '<br>';
                print $_num2 *= $_raised;
                $_raised ++;
            }
        }
    }
}

// solution activity 2

print '<br>';
print '<br>';

$n = 1; $p = 2;
print "$n, $p\n";
print '<br>';
$n ++;$p *=2;
print "$n, $p\n";
print '<br>';
$n ++; $p *=2;
print "$n, $p";
print '<br>';
$n ++; $p *=2;
print "$n, $p";
print '<br>';
$n ++; $p *=2;
print "$n, $p";

print '<br>';
print '<br>';

print '***************************************************************';

// Activity 3

$hamburger = 4.95;
$milkshake = 1.95;
$cola = 0.85;
$sales_tax = 7.5/100;
$pre_tax = 0.16;

$food = ($hamburger * 2) + $milkshake + $cola;
$tax_rate = $food * $sales_tax;
$tip = $food * $pre_tax;

$total = $food + $tax_rate + $tip;

print '<br>';
print '<br>';
print 'The total cost is: $' . $total;

print '<br>';
print '***************************************************************';
// Activity 4

$hamburger = 4.95;
$milkshake = 1.95;
$cola = 0.85;
$sales_tax = 7.5/100;
$pre_tax = 0.16;

$food = ($hamburger * 2) + $milkshake + $cola;
$tax_rate = $food * $sales_tax;
$tip = $food * $pre_tax;

$total = $food + $tax_rate + $tip;

print '<br>';
print '<br>';
print '<br>';
printf("%d %-9s at \$%.2f each:  \$%5.2f\n",2,'Hamburger', $hamburger, 2 * $hamburger);
print '<br>';
print '<br>';
printf("%d %-9s at \$%.2f each: \$%5.2f\n", 1,'Milkshake', $milkshake, $milkshake);
print '<br>';
print '<br>';
printf("%d %-9s at \$%.2f each: \$%5.2f\n",1,'Cola',$cola,$cola);
print '<br>';
print '<br>';
printf("%25s:  \$%5.2f\n", 'Food Total', $food);
print '<br>';
print '<br>';
printf("%25s: \$%5.2f\n", 'Food and Tax Total', $food + $tax_rate);
print '<br>';
print '<br>';
printf("%25s: \$%5.2f\n",'Food, Tax and Tip Total', $total);
print '<br>';

print '***************************************************************';
?>
