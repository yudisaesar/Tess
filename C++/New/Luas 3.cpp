#include<stdio.h>
#include<conio.h>
int luas3(int alas, int tinggi)
	{int luas3=alas*tinggi/2;
   	return luas3;}

void main()
{int a,t,ls;
	clrscr();
   printf("Alas    : ");scanf("%i",&a);
   printf("Tinggi  : ");scanf("%i",&t);
   ls=luas3(a,t);
   printf("Luas    : %i\n",ls);
   getche();
   }