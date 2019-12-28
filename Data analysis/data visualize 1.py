import matplotlib.pyplot as plt
import pandas as pd
plt.style.use('ggplot')
teachers=pd.read_excel('Teachers-BSCSE.xlsx')
Faculty_name = teachers["Faculty Member"]
TheoryBSCSE = teachers["Theory of BSCSE"]
LabBSCSE = teachers["Lab of BSCSE"]
TheoryBSEEE = teachers["Theory of BSEEE"]
LabBSEEE = teachers["Lab of BSEEE"]
TheoryMSCSE = teachers["Theory of MSCSE"]
LabMSCSE = teachers["Lab of MSCSE"]
ind = [x for x, _ in enumerate(Faculty_name)]
plt.figure(figsize=(15,10))
plt.bar(ind, TheoryBSCSE, width=0.8, label='Theory BSCSE', color='gold', bottom=LabMSCSE+TheoryMSCSE+LabBSEEE+TheoryBSEEE+LabBSCSE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=LabMSCSE+TheoryMSCSE+LabBSEEE+TheoryBSEEE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=LabMSCSE+LabBSEEE+TheoryBSEEE+LabBSCSE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=TheoryMSCSE+LabBSEEE+TheoryBSEEE+LabBSCSE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=LabMSCSE+TheoryMSCSE+LabBSEEE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=LabMSCSE+LabBSEEE+TheoryBSEEE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=LabMSCSE+TheoryBSEEE+LabBSCSE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=TheoryMSCSE+LabBSEEE+TheoryBSEEE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=TheoryMSCSE+LabBSEEE+LabBSCSE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=LabBSEEE+TheoryBSEEE+LabBSCSE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=LabMSCSE+TheoryMSCSE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=LabMSCSE+LabBSEEE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=LabMSCSE+TheoryBSEEE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=LabMSCSE+LabBSCSE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=TheoryMSCSE+LabBSEEE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=TheoryMSCSE+TheoryBSEEE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=TheoryMSCSE+LabBSCSE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=LabBSEEE+TheoryBSEEE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=LabBSEEE+LabBSCSE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=LabBSEEE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=LabBSCSE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=TheoryBSEEE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=TheoryMSCSE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold', bottom=LabMSCSE)
plt.bar(ind, TheoryBSCSE, width=0.8, color='gold')

plt.bar(ind, LabBSCSE, width=0.8, label='Lab BSCSE', color='silver', bottom=LabMSCSE+TheoryMSCSE+LabBSEEE+TheoryBSEEE)
plt.bar(ind, LabBSCSE, width=0.8, color='silver', bottom=LabMSCSE+TheoryMSCSE+LabBSEEE)
plt.bar(ind, LabBSCSE, width=0.8, color='silver', bottom=LabMSCSE+TheoryMSCSE+TheoryBSEEE)
plt.bar(ind, LabBSCSE, width=0.8, color='silver', bottom=LabMSCSE+LabBSEEE+TheoryBSEEE)
plt.bar(ind, LabBSCSE, width=0.8, color='silver', bottom=TheoryMSCSE+LabBSEEE+TheoryBSEEE)
plt.bar(ind, LabBSCSE, width=0.8, color='silver', bottom=LabMSCSE+TheoryMSCSE)
plt.bar(ind, LabBSCSE, width=0.8, color='silver', bottom=LabMSCSE+LabBSEEE)
plt.bar(ind, LabBSCSE, width=0.8, color='silver', bottom=LabMSCSE+TheoryBSEEE)
plt.bar(ind, LabBSCSE, width=0.8, color='silver', bottom=TheoryMSCSE+LabBSEEE)
plt.bar(ind, LabBSCSE, width=0.8, color='silver', bottom=TheoryMSCSE+TheoryBSEEE)
plt.bar(ind, LabBSCSE, width=0.8, color='silver', bottom=LabBSEEE+TheoryBSEEE)
plt.bar(ind, LabBSCSE, width=0.8, color='silver', bottom=TheoryBSEEE)
plt.bar(ind, LabBSCSE, width=0.8, color='silver', bottom=LabBSEEE)
plt.bar(ind, LabBSCSE, width=0.8, color='silver', bottom=TheoryMSCSE)
plt.bar(ind, LabBSCSE, width=0.8, color='silver', bottom=LabMSCSE)
plt.bar(ind, LabBSCSE, width=0.8, color='silver')

plt.bar(ind, TheoryBSEEE, width=0.8, label='Theory BSEEE', color='#CD853F',bottom=LabMSCSE+TheoryMSCSE+LabBSEEE)
plt.bar(ind, TheoryBSEEE, width=0.8, color='#CD853F',bottom=LabMSCSE+TheoryMSCSE)
plt.bar(ind, TheoryBSEEE, width=0.8, color='#CD853F',bottom=LabMSCSE+LabBSEEE)
plt.bar(ind, TheoryBSEEE, width=0.8, color='#CD853F',bottom=TheoryMSCSE+LabBSEEE)
plt.bar(ind, TheoryBSEEE, width=0.8, color='#CD853F',bottom=LabBSEEE)
plt.bar(ind, TheoryBSEEE, width=0.8, color='#CD853F',bottom=TheoryMSCSE)
plt.bar(ind, TheoryBSEEE, width=0.8, color='#CD853F',bottom=LabMSCSE)
plt.bar(ind, TheoryBSEEE, width=0.8, color='#CD853F')

plt.bar(ind, LabBSEEE, width=0.8, label='Lab BSEEE', color='orange', bottom=LabMSCSE+TheoryMSCSE)
plt.bar(ind, LabBSEEE, width=0.8, color='orange', bottom=TheoryMSCSE)
plt.bar(ind, LabBSEEE, width=0.8, color='orange', bottom=LabMSCSE)
plt.bar(ind, LabBSEEE, width=0.8, color='orange')

plt.bar(ind, TheoryMSCSE, width=0.8,label='Theory MSCSE',  color='red',bottom=LabMSCSE)
plt.bar(ind, TheoryMSCSE, width=0.8, color='red')

plt.bar(ind, LabMSCSE, width=0.8, label='Lab MSCSE', color='yellow')

plt.hlines(6,0,teachers.shape[0],color='r')
plt.hlines(3,0,teachers.shape[0],color='g')
plt.xticks(ind, Faculty_name,rotation=90)
plt.ylabel("Total Sections of Courses")
plt.xlabel("Faculty Members Name")
plt.legend(loc="upper right")
plt.title("BSCSE Faculty section of courses information")

plt.show()