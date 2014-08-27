//Jawaban UTS
#include<stdio.h>
#include<conio.h>
#include<string.h>
void main()
{//persiapan
 char kdp[3],psw[20],kdj[3],jur[20]; int trf,jml,ttl=0;
 //cetak judul
 gotoxy(5,5);printf("    PENJUALAN TIKET PESAWAT    ");
 gotoxy(5,6);printf("===============================");
 gotoxy(5,7);printf("Kode Pesawat");gotoxy(20,7);printf(":");
 gotoxy(5,8);printf("Pesawat");gotoxy(20,8);printf(":");
 gotoxy(5,9);printf("Kode Jurusan");gotoxy(20,9);printf(":");
 gotoxy(5,10);printf("Jurusan");gotoxy(20,10);printf(":");
 gotoxy(5,11);printf("Tarif");gotoxy(20,11);printf(":");
 gotoxy(5,12);printf("Jumlah");gotoxy(20,12);printf(":");
 gotoxy(5,13);printf("Total");gotoxy(20,13);printf(":");
 gotoxy(5,14);printf("------------------------------");
 //input kode pesawat
 gotoxy(22,7);scanf("%s",kdp);
 //proses cari pesawat
 if(kdp[0]=='G' || kdp[0]=='g'){strcpy(psw,"Garuda Indonesia");}
 else if(kdp[0]=='L' || kdp[0]=='l'){strcpy(psw,"Lion Air");}
 else if(kdp[0]=='B' || kdp[0]=='b'){strcpy(psw,"Batavia Air");}
 else {strcpy(psw,"Tidak Ada");}
 /*Cetak Pesawat*/ gotoxy(22,8);printf("%s",psw);
 //input kode jurusan
 gotoxy(22,9);scanf("%s",kdj);
 //proses cari jurusan
 if (kdj[1]=='B' || kdj[1]=='b')
   {strcpy(jur,"Surabaya");
   //cari tarif
   if (kdp[0]=='G' || kdp[0]=='g') {trf=1250000;}
   else if (kdp[0]=='L' || kdp[0]=='l') {trf=750000;}
   else if (kdp[0]=='B' || kdp[0]=='b') {trf=575000;}
   else {trf=0;}
   }
 else if (kdj[1]=='M' || kdj[1]=='m')
    {strcpy(jur,"Semarang");
    //cari tarif
    if (kdp[0]=='G' || kdp[0]=='g') {trf=750000;}
    else if (kdp[0]=='L' || kdp[0]=='l') {trf=350000;}
    else if (kdp[0]=='B' || kdp[0]=='b') {trf=300000;}
    else {trf=0;}
    }
  else if (kdj[1]=='K' || kdj[1]=='k')
    {strcpy(jur,"Makasar");
    //cari tarif
    if (kdp[0]=='G' || kdp[0]=='g') {trf=1500000;}
    else if (kdp[0]=='L' || kdp[0]=='l') {trf=1000000;}
    else if (kdp[0]=='B' || kdp[0]=='b') {trf=850000;}
    else {trf=0;}
    }
  else {strcpy(jur,"Tidak Ada");trf=0;}
  //cetak jurusan % Tarif
  gotoxy(22,10);printf("%s",jur);gotoxy(22,11);printf("%i",trf);
  //input jumlah dan proses cari total
  gotoxy(22,12);scanf("%i",&jml);ttl=jml*trf;
  //cetak jumlah
  gotoxy(22,13);printf("%i",ttl);
  getche();
  }



