#include <iostream>
using namespace std ;
int n=10, q=2 ;
int fct (int) ;
void f (void) ;

int fct (int p){
    int q ;
    q = 2 * p + n ;
    cout << "B : dans fct, n = " << n << " p = " << p << " q = " << q << "\n" ;
    return q ;
}

void f (void){
    int p = q * n ;
    cout << "C : dans f, n = " << n << " p = " << p << " q = " << q << "\n" ;
}

int main()
{
    int n=0, p=5 ;
    n = fct(p) ;
    cout << "A : dans main, n = " << n << " p = " << p << " q = " << q << "\n" ;
    f() ;
    return 0;
}