//Contoh Program Mencetak Symbol
#include <iostream.h>
#include <conio.h>
#include <iomanip.h>
#define maxs 9
//begin program
void main ()
{ int kolom,baris;
clrscr ();
for (baris=0;baris<=maxs; baris+=2)
{
for (kolom=baris;kolom<=maxs;kolom++)
{
if (kolom %2==1)
cout << setw(2);
else
cout <<"*";
}

cout << endl;
}
getch ();
}
