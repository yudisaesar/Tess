#include<stdio.h>
#include<conio.h>
void garis(){printf("------------------------------\n");}
void main()
{int l,p,ls=0;
 printf("Lebar    :");scanf("%i",&l);
 printf("Panjang  :");scanf("%i",&p);
 ls=p*l;
 garis();
 printf("Luas Persegi Panjang : %i\n",ls);
 garis();
 getche();
 }
