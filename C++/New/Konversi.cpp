#include<stdio.h>
#include<conio.h>
//Celcius to Kelvin
int kelvin(int c, int ket)
	{int kelvin=c+ket;
   	return kelvin;}
int fahrenheit (int c,int rms,int ttp)
	{	int fahrenheit=c*rms+ttp;
   return fahrenheit;}

void main()
{ int c,hsl=0,ket=273,rms=1.8,ttp=32;
   float f;
	clrscr();
   printf("Ketikkan Celcius    : ");scanf("%i",&c);
   hsl=kelvin(c,ket);
   printf("Hasil Konverter Celcius ke Kelvin          : %i\n",hsl);
   hsl=fahrenheit(c,rms,ttp);
   printf("Hasil Konverter Celcius ke Fahrenheit      : %i\n",hsl);
   getche();
   }