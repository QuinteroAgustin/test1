#include <iostream>
#include "maths.h"
using namespace std ;

int main(){
    int a;
    std::cout << "Entrez un entier : " << std::endl;
    std::cin >> a;
    a = square(a);
    std::cout << "Son carré est : "<< a << std::endl;
    return 0;
}