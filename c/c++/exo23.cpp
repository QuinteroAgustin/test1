#include <iostream>
using namespace std ;
int fct (int r){
    return 2*r ;
}
int main(){
    int n, p=5 ;
    n = fct(p) ;
    cout << "p = " << p << " n = " << n ;
}


// il faut déclarer la fonction avant le "main"
// Et il faut déclarer le type de retour pour la fonction main