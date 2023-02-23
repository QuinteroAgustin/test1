#include <iostream>
using namespace std ;
void f1 (void){
    std::cout << "Bonjour ! " << std::endl ;
}

void f2 (int a){
    for(int i=0;i<a;i++){
        std::cout << "Bonjour ! " << std::endl;
    }
}
int f3 (int a){
    for(int i=0;i<a;i++){
        std::cout << "Bonjour ! " << std::endl;
    }
    return 0;
}

int main()
{
    std::cout << "F1 :  " << std::endl;
    f1();
    std::cout << "F2 :  " << std::endl;
    f2(4);
    std::cout << "F3 :  " << std::endl;
    std::cout << "F3 retourne la valeur : " << f3(2) << std::endl;
    return 0;
}