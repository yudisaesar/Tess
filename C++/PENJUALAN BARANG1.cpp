//PROGRAM PENJUALAN
#include <stdio.h>
#include <conio.h>
#include <string.h>
void main()
{char kdb[5],nmb[10],gol[10];long hrg,qty,jml;
clrscr();
 //input data
 gotoxy(5,3);printf("PENJUALAN BARANG");
 gotoxy(5,4);printf("=============================================");
 gotoxy(5,5);printf("Kode Barang");gotoxy(35,5);printf(":");
 gotoxy(5,6);printf("Nama Barang   ");gotoxy(35,6);printf(":");
 gotoxy(5,7);printf("Golongan      ");gotoxy(35,7);printf(":");
 gotoxy(5,8);printf("Harga         ");gotoxy(35,8);printf(":");
 gotoxy(5,9);printf("qty           ");gotoxy(35,9);printf(":");
 gotoxy(5,10);printf("Jumlah       ");gotoxy(35,10);printf(":");
 gotoxy(5,11);printf("============================================");
 //input data
 gotoxy(37,5);scanf("%s",kdb);
 //mencari nama barang dan harga
 if(kdb[0]=='A' | kdb[0]=='a'){strcpy(nmb,"Monitor");hrg=750000;}
 else if (kdb[0]=='B'| kdb[0]=='b'){strcpy(nmb,"Hardisk");hrg=550000;}
 else if (kdb[0]=='C'| kdb[0]=='c'){strcpy(nmb,"Flasdisk");hrg=150000;}
 else if (kdb[0]=='D'| kdb[0]=='d'){strcpy(nmb,"Mouse");hrg=35000;}
 else{strcpy(nmb,"Tidak Ada");hrg=0;}
 //mencari golongan
 if(kdb[1]=='1' | kdb[1]=='1'){strcpy(gol,"Lokal");}
 else if (kdb[1]=='2'| kdb[1]=='2'){strcpy(gol,"Import");}
 else if (kdb[1]=='3'| kdb[1]=='3'){strcpy(gol,"Lain-lain");}
 else{strcpy(gol,"Tidak Ada");}
 //cetak nama barang & Harganya
 gotoxy(37,6);printf("%s",nmb);gotoxy(37,7);printf("%s",gol);
 gotoxy(37,8);printf("%i",hrg);
 gotoxy(37,9);scanf("%i",&qty);jml=qty*hrg;gotoxy(37,10);printf("%i",jml);
 getche();}
