#include<stdio.h>
#include<conio.h>
void garis(){printf("------------------------------\n");}
void main()
{int s1,s2,ls=0;
 printf("Sisi 1      :");scanf("%i",&s1);
 printf("Sisi2       :");scanf("%i",&s2);
 ls=s1*s2;
 garis();
 printf("Luas Segi 4   : %i\n",ls);
 garis();
 getche();
 }
