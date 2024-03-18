rokhs = []

for i in range(4):
    xy = input()
    xy = xy.split()
    x = xy[0]
    y = xy[1]
    rokhs = rokhs + [[x,y]]
    
happy = 0
if  rokhs[0][0] == rokhs[2][0] or rokhs[0][1] == rokhs[2][1] or rokhs[0][0] == rokhs[3][0] or rokhs[0][1] == rokhs[3][1]  :
    happy = happy + 1

if  rokhs[1][0] == rokhs[2][0] or rokhs[1][1] == rokhs[2][1] or rokhs[1][0] == rokhs[3][0] or rokhs[1][1] == rokhs[3][1]:
    happy = happy + 1


if happy == 1:
    print("happy")
else :
    print("unhappy")