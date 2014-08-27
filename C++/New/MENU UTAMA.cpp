#include<stdio.h>
#include<conio.h>
void segi3()
{ int a,t,luas;
  clrscr();
  printf("Menghitung Luas Segi Tiga  \n");
  printf("Alas         : ");scanf("%i",&a);
  printf("Tinggi       : ");scanf("%i",&t);
  printf("Luas         : ");
  luas=a*t/2;
  printf("%i",luas);
  getche();
}
void segi4()
{ int p,l,luas;
  clrscr();
  printf("Menghitung Luas Segi Empat \n");
  printf("Panjang      :");scanf("%i",&p);
  printf("Lebar        :");scanf("%i",&l);
  printf("Luas         :");
  luas=p*l;
  printf("%i",luas);
  getche();
}
void jual()
{ printf("SUB PROGRAM PENJUALAN \n");
  getche();}
void main()
{ int pil;
atas://label titik kembali
 clrscr();
 printf("=========================== \n");
 printf("        MENU UTAMA          \n");
 printf("=========================== \n");
 printf("1. Hitung Luas Segi 3       \n");
 printf("2. Hitung Luas Segi 4       \n");
 printf("3. Penjualan                \n");
 printf("0. Selesai                  \n");
 printf("=========================== \n");
 printf("      Pilihan [0 = 3 ]:");scanf("%i",&pil);
 if(pil==1){segi3();goto atas;}
 else if(pil==2){segi4();goto atas;}
 else if(pil==3){jual();goto atas;}
 else if(pil==0){goto bawah;}
 else {goto atas;}
 bawah:
 getche();}
