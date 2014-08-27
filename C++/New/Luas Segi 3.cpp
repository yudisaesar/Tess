#include<stdio.h>
#include<conio.h>
void garis(){printf("------------------------------\n");}
void main()
{int a,t,ls=0;
 printf("Alas      :");scanf("%i",&a);
 printf("Tinggi    :");scanf("%i",&t);
 ls=0.5*a*t;
 garis();
 printf("Luas Segitiga   : %i\n",ls);
 garis();
 getche();
 }
