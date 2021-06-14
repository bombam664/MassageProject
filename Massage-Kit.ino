
#include <WiFiNINA.h>

#define sensorPin A5

//WIFI SESSION
char ssid[] = "Aedo";
char pass[] = "053916527";

int status = WL_IDLE_STATUS;

//WEB Sever
char server[] = "dlabi.com";


//MachineID
String postMac = "MachineID=";
String postMacID = "MC002";

//CustomerID
String postCustomer = "CustomerID=";
String id = "4";


//Force
String postData;
String postVariable1 = "A_force11=";
String postVariable2 = "A_force12=";
String postVariable3 = "A_force13=";
String postVariable4 = "A_force14=";
String postVariable5 = "A_force15=";

//Time
String posttime1 ="A_time11=";
String posttime2 ="A_time12=";
String posttime3 ="A_time13=";
String posttime4 ="A_time14=";
String posttime5 ="A_time15=";


//LessonDID
String LessonDID11 ="LessonDID11=";
String LessonDID12 ="LessonDID12=";
String LessonDID13 ="LessonDID13=";
String LessonDID14 ="LessonDID14=";
String LessonDID15 ="LessonDID15=";

//DID
int DID11 = 11;
int DID12 = 12;
int DID13 = 13;
int DID14 = 14;
int DID15 = 15;


//Sensorname
String Sensor_name11 = "Sensor_name11=";
String Sensor_name12 = "Sensor_name12=";
String Sensor_name13 = "Sensor_name13=";
String Sensor_name14 = "Sensor_name14=";
String Sensor_name15 = "Sensor_name15=";


//nameSensorID
String fsr11 = "fsr11";
String fsr12 = "fsr12";
String fsr13 = "fsr13";
String fsr14 = "fsr14";
String fsr15 = "fsr15";



WiFiClient client;
float cf = 19.5; // caliberation factor

//func time
long secs1;
long secs2;
long secs3;
long secs4;
long secs5;


// FlexiForce sensor is connected analog pin A0 of arduino or mega.

float ffs1 = A0;  
float ffs12 = A1;
float ffs13 = A2;
float ffs14 = A3;
float ffs15 = A4;


float ffsdata = 0; 
float ffsdata2 = 0;
float ffsdata3 = 0;
float ffsdata4 = 0;
float ffsdata5 = 0;


float vout; 
float vout2;
float vout3;
float vout4;
float vout5;



void setup() {

  Serial.begin(9600);
  pinMode(ffs1, INPUT); 
  pinMode(ffs12, INPUT);
  pinMode(ffs13, INPUT);
  pinMode(ffs14, INPUT);
  pinMode(ffs15, INPUT);



  while (status != WL_CONNECTED) {
    Serial.print("Attempting to connect to Network named: ");
    Serial.println(ssid);
    status = WiFi.begin(ssid, pass);
    delay(1000);
  }

  Serial.print("SSID: ");
  Serial.println(WiFi.SSID());
  IPAddress ip = WiFi.localIP();
  IPAddress gateway = WiFi.gatewayIP();
  Serial.print("IP Address: ");
  Serial.println(ip);
}


void loop() {
  
   //FSR R0
   int  ffsdata = analogRead(ffs1);
   vout = (ffsdata * 5.0) / 1023.0; 
   vout = vout * cf;
   vout = vout * 2.2046;
   vout = vout * 10;  
   func_1();
   
   //FSR R12
   int  ffsdata2 = analogRead(ffs12);
vout2 = (ffsdata2 * 5.0) / 1023.0; 
 vout2 = vout2 * cf;
 vout2 = vout2 * 2.2046;
 vout2 = vout2 * 10;
 func_2();
 
//FSR R13
   int  ffsdata3 = analogRead(ffs13);
vout3 = (ffsdata3 * 5.0) / 1023.0; 
 vout3 = vout3 * cf;
 vout3 = vout3 * 2.2046;
 vout3 = vout3 * 10;
 func_3();

 //FSR R14
   int  ffsdata4 = analogRead(ffs14);
vout4 = (ffsdata4 * 5.0) / 1023.0; 
 vout4 = vout4 * cf;
 vout4 = vout4 * 2.2046;
 vout4 = vout4 * 10;
 func_4();

 //FSR R15
   int  ffsdata5 = analogRead(ffs15);
vout5 = (ffsdata5 * 5.0) / 1023.0; 
 vout5 = vout5 * cf;
 vout5 = vout5 * 2.2046;
 vout5 = vout5 * 10;
 func_5();


 


//("arg1=value1&arg2=value2");
  String postData = postMac+String(postMacID)+"&"+postCustomer+id
  +"&"+Sensor_name11+fsr11+"&"+LessonDID11+DID11+"&"+postVariable1+String(vout)+"&"+posttime1+String(secs1)
  +"&"+Sensor_name12+fsr12+"&"+LessonDID12+DID12+"&"+postVariable2+String(vout2)+"&"+posttime2+String(secs2)
  +"&"+Sensor_name13+fsr13+"&"+LessonDID13+DID13+"&"+postVariable3+String(vout3)+"&"+posttime3+String(secs3)
  +"&"+Sensor_name14+fsr14+"&"+LessonDID14+DID14+"&"+postVariable4+String(vout4)+"&"+posttime4+String(secs4)
  +"&"+Sensor_name15+fsr15+"&"+LessonDID15+DID15+"&"+postVariable5+String(vout5)+"&"+posttime5+String(secs5); 


  
  if (client.connect(server, 80)) {
    client.println("POST /project/massage-learning-kit/updateSensor.php HTTP/1.1");
    client.println("Host: dlabi.com");
    client.println("Content-Type: application/x-www-form-urlencoded");
     //client.print("Force sensor Unit1:");
    client.print("Content-Length: ");    
    
    client.println(postData.length());
    client.println();
    client.print(postData);
  }

  if (client.connected()) {
    client.stop();
  }
  Serial.println(postData);
//  Serial.println(secs);
// Serial.println(analogRead(ffs1));
  
ffsdata = 0; 
ffsdata2 = 0;

  delay(1000);
}

void func_1(){
  unsigned long previousMillis = 0; 
      unsigned long currentMillis = millis();
      if (currentMillis - previousMillis >= 1000) {
        previousMillis = currentMillis;
    if(vout==0){
    secs1=0;
    Serial.println(secs1);
  }else{
    secs1+=1; 
    } 
 }
}

void func_2(){
  unsigned long previousMillis = 0;
      unsigned long currentMillis = millis();
      if (currentMillis - previousMillis >= 1000) {
        previousMillis = currentMillis;
    if(vout2==0){
    secs2=0;
    Serial.println(secs2);
  }else{
    secs2+=1; 
    } 
 }
}

void func_3(){
  unsigned long previousMillis = 0;
      unsigned long currentMillis = millis();
      if (currentMillis - previousMillis >= 1000) {
        previousMillis = currentMillis;
    if(vout3==0){
    secs3=0;
    Serial.println(secs3);
  }else{
    secs3+=1; 
    } 
 }
}

void func_4(){
  unsigned long previousMillis = 0;
      unsigned long currentMillis = millis();
      if (currentMillis - previousMillis >= 1000) {
        previousMillis = currentMillis;
    if(vout4==0){
    secs4=0;
    Serial.println(secs4);
  }else{
    secs4+=1; 
    } 
 }
}

void func_5(){
  unsigned long previousMillis = 0;
      unsigned long currentMillis = millis();
      if (currentMillis - previousMillis >= 1000) {
        previousMillis = currentMillis;
    if(vout5==0){
    secs5=0;
    Serial.println(secs5);
  }else{
    secs5+=1; 
    } 
 }
}
