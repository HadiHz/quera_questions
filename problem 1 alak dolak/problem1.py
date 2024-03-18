import numpy as np
from numpy.linalg import inv

x = []
y = []
def makingXandYMatris(line):
    global x, y
    line = line.split(',')
    line1 = []
    for i in line[:10]:
        line1.append(float(i))
    x.append(line1)
    yInput = [float(line[10:][0].split('\n')[0])]
    y.append(yInput)

def transposeMatris(m):
    result = [[m[j][i] for j in range(len(m))] for i in range(len(m[0]))]
    # a = np.array(m)
    # result = a.transpose()
    return result

def matrisMul(m1, m2):
    # result = [[sum(a*b for a,b in zip(X_row,Y_col)) for Y_col in zip(*m2)] for X_row in m1]
    a = np.array(m1)
    b = np.array(m2)
    result = np.matmul(a, b)
    return result

def invers(m):
    a = np.array(m)
    ainv = inv(a)
    return ainv

f = open("train.csv", "r")
breaking = 0
for line in f:
    if breaking == 0:
        breaking = breaking + 1
        continue
    makingXandYMatris(line)
    breaking = breaking + 1
f.close()

xt = transposeMatris(x)
xtx = matrisMul(xt , x)
xtxinv = invers(xtx)
xtxinvxt = matrisMul(xtxinv, xt)
xtxinvxty = matrisMul(xtxinvxt, y)


f = open("output.txt", "w")
for w in xtxinvxty:
    f.write(str(w[0]) + '\n')
f.close()
