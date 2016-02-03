----v2
SELECT prod.CodProd
      ,Descrip
      ,Descrip2
      ,Descrip3
      ,Video
      ,Audio
      ,Resolucion
      ,General
      ,Almacenamiento
      ,Grabacion
      ,existen
      ,EsOferta
      ,Precio1
  FROM SySJM.dbo.SAPROD as prod LEFT JOIN SYSJM.dbo.SAPROD_01 as prod1
  ON prod.CodProd = prod1.CodProd
  WHERE Activo = 1 and Existen > 0
  ORDER BY prod.CodProd

---v1
SELECT prod.CodProd
      ,Descrip
      ,Descrip2
      ,Descrip3
      ,CodInst AS depart
      ,Audio
      ,Video
      ,Resolucion
      ,General
      ,Almacenamiento
      ,Grabacion
      ,existen
      ,EsOferta
      ,Precio1
  FROM SySJM.dbo.SAPROD as prod LEFT JOIN SYSJM.dbo.SAPROD_01 as prod1
  ON prod.CodProd = prod1.CodProd
  WHERE Activo = 1 and Existen > 0
  ORDER BY prod.CodProd


SELECT [CodProd]
      ,[Descrip]
      ,[Descrip2]
      ,[Descrip3]
      ,[CodInst] AS depart
      ,[Precio1]
  FROM [SySJM].[dbo].[SAPROD]
  WHERE Activo = 1 and Existen > 0
  ORDER BY CodPro


INFORMACION OFERTAS:
Tabla: OFERTA
codprod: CAM700-01-1
Descr: POR LA COMPRA MINIMA DE 6 UNIDADES
precio Bs. 1.000,00