//Program Penjualan
#include<stdio.h>
#include<conio.h>
#include<string.h>
#include <iostream.h>
#include<iomanip.h>

void main()
{//deklarasi variable
char nama [10],kb[15],harga[15]; long int q=0,jml=0;
//proses filtering
char a;
cout <<"masukkan kode barang"<<endl;
cin >>a;
switch(a) {
case 'a' : cout<<"Monitor";
break;
case 'b' : cout<<"Harddisk";
break;
case 'c' : cout<<"Flashdisk";
break;
case 'd' : cout<<"Mouse";
break;
default : cout<<"lebih dari d";
}
//Proses IF
if ('a')
   {strcpy(harga,"750000");}
else if('b')
   {strcpy(harga,"550000");}
else if('c')
   {strcpy(harga,"150000");}
else
   {strcpy(harga,"35000");}
//proses cari Jumlah

clrscr();//bersihkan layar
//cetak outputnya
printf("============================== \n");
printf("Program Penjualan\n");
printf("Oleh Yudi Saesar \n");
printf("Kode Barang    : %s\n",kb);
printf("Nama Barang    : %s\n",nama);
printf("Harga          : %i\n",harga);
printf("Quantity       : %i\n",q);
printf("Jumlah         : %i\n",jml);
printf("============================== \n");
getche();}

