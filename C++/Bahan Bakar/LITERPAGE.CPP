//cetak perhalaman
#include <stdio.h>
#include <conio.h>
void main()
{ int ltr,prm,slr,prx,hprm=0,hslr=0,hprx=0,brs=0,hal=1;
  char jwb[1];
  printf("Masukkan Harga Premium :");scanf("%i",&prm);
  printf("Masukkan Harga Solar   :");scanf("%i",&slr);
  printf("Masukkan Harga Premix  :");scanf("%i",&prx);
  clrscr();
  printf("         DAFTAR HARGA BAHAN BAKAR MINYAK hal: %i \n",hal);
  printf("====================================================\n");
   printf("| ltr |    Premium    |    Solar    |    Premix    |\n");
   printf("====================================================\n");
  for (ltr=1;ltr<=100;ltr++)
  {brs++;
   hprm=ltr*prm;hslr=ltr*slr;hprx=ltr*prx;
   printf("| %3.0i |    %6.0i     |    %6.0i   |    %6.0i    |\n",
   ltr,hprm,hslr,hprx);
   if (brs==20 && ltr<100)
   {printf("====================================================\n");
    printf("Tekan sembarang tombol + Enter untuk melanjutkan...");
    scanf("%s",jwb);
    clrscr();brs=0;hal++;
  printf("         DAFTAR HARGA BAHAN BAKAR MINYAK hal: %i \n",hal);
  printf("====================================================\n");
  printf("| ltr |    Premium    |    Solar    |    Premix    |\n");
  printf("====================================================\n");
   }}
 printf("====================================================\n");
 getche();
 }


