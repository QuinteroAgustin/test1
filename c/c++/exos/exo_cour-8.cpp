#include <iostream>
using namespace std ;

int swap1(int& a, int& b){
    int temp = a;
    a = b;
    b = temp;
}


int main(){
    int a, b;
    std::cout << "Entrez un entier a : " << std::endl;
    std::cin >> a;
    std::cout << "Entrez un entier b : " << std::endl;
    std::cin >> b;
    std::cout << "Avant swap a : "<< a << " b  :  "<< b << std::endl;
    swap1(a,b);
    std::cout << "Apres swap a : "<< a << " b  :  "<< b << std::endl;
    return 0;
}