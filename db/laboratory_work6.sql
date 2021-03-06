1.
SELECT id, cpu, memory FROM PC                   
  WHERE 
    memory = 3000;
  
SELECT hdd FROM PC
WHERE hdd =
(
    SELECT MIN(hdd)
    FROM PC
)
GROUP BY hdd;



SELECT count(hdd) as count_hdd, hdd FROM PC
WHERE hdd =
(
    SELECT MIN(hdd)
    FROM PC
)
GROUP BY hdd;
     

2.



3.
DATETIME - ⨯ ������ ��� �࠭���� ���� � �६���
�࠭�� �६� � ���� 楫��� �᫠ ���� YYYY-MM-DD HH:MM:SS ('�� 1000-01-01 00:00:00'
�� '9999-12-31 23:59:59'), �ᯮ���� ��� �⮣� 8 ���⮢. 
�� �६� �� ������ �� �६����� ����. ��� �ᥣ�� �⮡ࠦ����� �� �롮થ �筮 ⠪ ��,
��� �뫮 ��࠭���, ������ᨬ� �� ⮣� ����� �ᮢ�� ���� ��⠭����� � MySQL.

TIMESTAMP - ⨯ ������ ��� �࠭���� ���� � �६���.
�࠭�� 4-���⭮� 楫�� �᫮, ࠢ��� �������� ᥪ㭤, ��襤�� � ���㭮� 1 ﭢ��� 1970 ����
�� ��।�񭭮�� �६��� �ਭ��� (�.�. �㫥��� �ᮢ�� ����, �窠 ������ �ᮢ�� ���ᮢ).
('1970-01-01 00:00:01' UTC �� '2038-01-19 03:14:07' UTC.)
�� ����祭�� �� ���� �⮡ࠦ����� � ���⮬ �ᮢ��� ����. ��ᮢ�� ���� ����� ���� �����
� ����樮���� ��⥬�, ��������� ����ன��� MySQL ��� � �����⭮� ��ᨨ.
���࠭���� �ᥣ�� ������⢮ ᥪ㭤 �� UTC (㭨���ᠫ쭮� ���न��஢����� �६�,
᮫��筮� �६� �� ��ਤ���� �ਭ���), � �� �� �����쭮�� �ᮢ��� �����. 

��� ���� �⫨稥! TIMESTAMP �� 㬮�砭�� NOT NULL, � ��� ���祭�� �� 㬮�砭�� ࠢ�� NOW().
(��ଠ� YYYY-MM-DD HH:MM:SS)

⨯ TIMESTAMP �ᯮ��㥬 ��� �࠭���� ��� � �६��� ᢥ�襭�� ᮡ�⨩ ��襣� �६��� (⥪���
(����஢����,  ���� ࠧ��饭�� ��⥩, ���������� ⮢�஢, ��ଫ���� �������) � �।�����
� ����ਬ�� ���饬 ᮡ�⨩ (��室� ����� ���ᨩ, �������� � �����஢騪� � �.�)), 
� DATETIME - ��� �࠭���� ��� � �६��� ᢥ�襭�� �����᪨� ᮡ�⨩, 
��� ᮡ�⨩ ��㡮���� ���饣� (��� ஦�����, ���� ���᪠ �த�⮢, ���࠭�� �१����⮢,
����᪨ ��ᬨ�᪨� ࠪ�� � �.�.)).

TIMESTAMP �࠭�� ���祭�� � UTC. �� ��࠭���� ���祭�� ��� ��ॢ������ �� ⥪�饣� �६����� 
���� � UTC, � �� ��� �⥭�� - �� �६� ⥪�饩 �६����� ���� �� UTC. 

       
4.

SELECT c.name FROM course c
JOIN student_course sc ON (sc.course_id=c.sourse_id)
WHERE student_id = 1;

        
                   
5. ��                   
                          
6.                                      

SELECT DISTINCT name_field FROM table;

�� DISTINCT �ਬ������ ����� �������� �㭪権.
COUNT(DISTINCT name) - ���-�� ����ᥩ � ࠧ�묨 name �� ࠢ�묨 NULL
SUM(DISTINCT x) - �㬬� ࠧ��� x �� ࠢ��� NULL


7.                    


8.
HAVING - �ਬ������ ��� 䨫���樨 �㭪権 � �⮫�殢 ��㯯�஢����� �� ����� GROUP BY
㪠������ � SELECT.


��㣨�� ᫮���� �ਬ������ ��� ��ॣ���� �㭪権(COUNT(), MAX() ...) � �⮫�殢 㪠������
� ��ࠦ���� SELECT � ��ࠡ�⠭��� GROUP BY. �᫨ �㦭� �ᯮ�짮���� ��-�, �� �� 㪠�����
� SELECT, � ���� �ᯮ�짮���� WHERE.

���冷� �믮������ ⠪��:
1. � SELECT 㪠�뢠�� �㦭� �⮫��� ��� ��ॣ��� �㭪樨(� � 祬 �㤥� ࠡ���� � GROUP BY
 � HAVING)
2. � GROUP BY ��襬 �� ������ �⮫��� ��� �㭪樨 �� ��㯯��㥬
3. � HAVING ��襬 �᫮��� 䨫��஢�� १���� GROUP BY 

�ਬ������ ��᫥���� � �� ��⨬��������. �� �ᯮ�짮����� �� �� �����祭�� �� ������
⠡���� ���� �६���� ����প�.