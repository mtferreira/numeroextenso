# Número por Extenso

Converte numeral em valor por extenso.

[<img src="https://img.shields.io/github/license/mashape/apistatus.svg">](https://github.com/mtferreira/numeroextenso/blob/master/LICENSE)

### Como usar:

```bash
composer require mtferreira/numeroextenso
```

```php
include __DIR__.'/vendor/autoload.php';

use Mtferreira\NumeroExtenso\NumeroExtenso;

$extenso = NumeroExtenso::converter(123.45);
echo $extenso;
```

- Retorno:
```
cento e vinte três reais e quarenta cinco centavos
```

```php
include __DIR__.'/vendor/autoload.php';

use Mtferreira\NumeroExtenso\NumeroExtenso;

$negativo = NumeroExtenso::converter(-1);
echo $negativo;
```
- Retorno:
```
false
```

## Exemplos:

```
12345.67
doze mil, trezentos e quarenta e cinco reais e sessenta e sete centavos

1234.56
um mil, duzentos e trinta e quatro reais e cinquenta e seis centavos

123.45
cento e vinte e três reais e quarenta e cinco centavos

12.34
doze reais e trinta e quatro centavos

1.23
um real e vinte e três centavos

0.21
vinte e um centavos

0.04
quatro centavos
```
