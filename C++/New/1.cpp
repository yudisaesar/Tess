#include<stdio.h>
#include<conio.h>
void garis(){printf("------------------------------\n");}
void persegipanjang()
{ char c;
  int s1,s2,luas;
  clrscr();
  gotoxy(5,5);printf("Menghitung Luas Segi Empat ");
  gotoxy(5,6);garis();
  gotoxy(5,7);printf("Panjang      :");scanf("%i",&s1);
  gotoxy(5,8);printf("Lebar        :");scanf("%i",&s2);
  gotoxy(5,9);printf("Luas         :");
  gotoxy(5,10);garis();
  luas=s1*s2;
  gotoxy(27,9),printf("%i",luas);
  c=getche();
}

void segitiga()
{ char c;
  int a,t,luas;
  clrscr();
  gotoxy(5,5);printf("Menghitung Luas Segi Empat ");
  gotoxy(5,6);garis();
  gotoxy(5,7);printf("Alas         :");
  gotoxy(5,8);printf("Tinggi       :");
  gotoxy(5,9);printf("Luas         :");
  gotoxy(5,10);garis();
  gotoxy(27,7);scanf("%i"&a);
  gotoxy(27,8);scanf("%i",&t);
  luas=0.5*a*t;
  gotoxy(27,9),printf("%i",luas);
  c=getche();
}

void main()
{ int p;
  do
  { clrscr();

  gotoxy(10.5);printf("     Menu Program     ");
  gotox(10.6);garis();
  gotox(10.7);("  [1] Luas Segi Empat   ");
  gotox(10.8);("  [2] Luas Segi Tiga    ");
  gotox(10.9);("  [3] Selesai           ");
  gotox(10.10);garis();
  p=3;
  while (p>2)
  { gotoxy(10,11);printf(" Pilihan : ");
    scanf("%i",&p);
  }
  if (p==1)
   {persegipanjang();}
  else if (p==2)
   {segitiga();}
  } while (p==0);
}
