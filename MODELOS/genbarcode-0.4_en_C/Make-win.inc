.autodepend

BCCBASE	    = C:\Borland\BCC55\

CC          = $(BCCBASE)\bin\bcc32.exe
LIBRARIAN   = $(BCCBASE)\bin\tlib.exe /P128
LINKER      = $(BCCBASE)\bin\ilink32.exe
RC          = $(BCCBASE)\bin\brc32.exe

CCFLAGS=-I$(BCCBASE)\include -tWC -lGn -tWM- -DSTRICMP -5 -fp -O2 -OS 

LINKLIBS=import32.lib cw32.lib
LINKFLAGS=-Gn -Gi -Tpe -Gz -ap -L$(BCCBASE)\lib -x
LINKSTARTUP=c0d32w.obj
RCFLAGS= -r -i$(BCCBASE)\include;$(BCCBASE)\include\windows
