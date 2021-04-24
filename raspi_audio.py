import subprocess
import dropbox
import urllib.request
a=1
while (1):
    data=urllib.request.urlopen("http://10.10.110.2/raspi_audio/fetching.php").read()
    if(data == b'on'):
        subprocess.call(['arecord','--format=U8','--duration=5','--rate=8000','audio_%d.mp3' % (a)])
        f=open('audio_%d.mp3' % (a),'rb')
        dbx = dropbox.Dropbox('68K8ch6LJsAAAAAAAAAADI2j6qBC3_1LK80y5NQu9QZ6YmJbVwym9bFduw_kjTzD')
        dbx.files_upload(f.read(),'/Raspi_audio/audio_%d.mp3' % (a))
        f.close()
        a+=1
    else:
        print ('not recording')