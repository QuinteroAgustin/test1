#include <stdio.h>

int main()
{
    int tab[7] = {5,2,5,17,22,3,8};
    int tabRes[7];
    int valMin = tab[0];
    int position = 0;
    for(int i=0; i<7; i++){
        for(int y=0; y<7; y++){
            if(tab[y]>0 && tab[y] < valMin){
                valMin = tab[y];
                position = y;
            }
        }
        tabRes[i] = valMin;
        tab[position] = -1;
    }


    for(int i=0; i<7; i++){
        printf("%d, ", tabRes[i]);
    }
    

    return 0;
}