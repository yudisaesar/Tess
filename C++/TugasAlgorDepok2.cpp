#include<iostream.h>
#include<conio.h>
#include<string.h>
#include<math.h>
#include<iomanip.h>
void main()
{
char kd;
char nm[30];
char *nama;
int dis;
char *jenis;
int jumlah,jn;
float harga=0;
long Total;
char lagi='Y';
clrscr();
while(lagi=='Y' ||lagi=='y')
{
gotoxy(10,5);
cout<<"Aplikasi Penjualan by Yudi Saesar\n";
gotoxy(10,6);
cout<<"===========================\n";
gotoxy(10,7);
cout<<"Nama Pembeli      = ";cin>> nm;
gotoxy(10,8);
cout<<"Kode Barang[A/B/C/D] = ";cin>> kd;
gotoxy(10,9);
cout<<"Jenis Bayar[1.Tunai/2.Kredit]  = ";cin>>jn;
gotoxy(10,10);
cout<<"============================\n";
if ((kd=='A' || kd=='a') && (jn==1))
{
nama="Monitor";
jenis="Tunai";
harga=750000;
}
else if ((kd=='B' || kd=='b') && (jn==1))
{
nama="Harddisk";
jenis="Tunai";
harga=550000;
}
else if ((kd=='C' || kd=='c') && (jn==1))
{
nama="Flashdisk";
jenis="Tunai";
harga=150000;
}
else
{
nama="Mouse";
jenis="Tunai";
harga=35000;
}
gotoxy(10,11);
cout<<"Nama barang     ="<<nama;
gotoxy(10,12);
cout<<"Jenis Bayar     = "<<jenis;
gotoxy(10,13);
cout<<"Harga Barang     = "<<setw(8)<<harga;
gotoxy(10,14);
cout<<"Jumlah Beli    = ";cin>>jumlah;
Total=harga*jumlah;
gotoxy(10,15);
cout<<"Total bayar    = "<<Total;
gotoxy(10,16);
cout<<"===========================\n";
gotoxy(10,20);
cout<<"Ada Lagi Yang Pengen Dibeli[Y/T]    = ";cin>> lagi;
clrscr();
}
}
