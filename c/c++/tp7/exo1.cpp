#include <stdio.h>
#include <iostream>
using namespace std ;

int main()
{
int t [3] ;
int i, j ;
int adt ;
for (i=0, j=0 ; i<3 ; i++) t[i] = j++ + i ;
for (i=0 ; i<3 ; i++) cout << t[i] << " " ;
return 0;
}