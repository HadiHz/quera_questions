import numpy as np
from numpy.linalg import inv

imdb = []
f = open("imdb.csv", "r", encoding="utf8")
breaking = 0
for line in f:
    # if breaking == 0:
    #     breaking = breaking + 1
    #     continue
    imdb.append(line)
    if breaking == 10:
        break
    breaking = breaking + 1
f.close()


# f = open("output.txt", "w")
# for w in xtxinvxty:
#     f.write(str(w[0]) + '\n')
# f.close()
