# PHP Mastery Roadmap (Checklist)

> Marque ✅ conforme for estudando. Ideal: 1–3 itens/dia + 1 exercício prático.

## Fase 1 — Fundamentos
- [ ] Instalação/CLI: `php -v`, `php.ini`, extensões, `php -m`
- [ ] Tipos, variáveis, casting, `declare(strict_types=1)`
- [ ] Operadores e expressões
- [ ] Controle de fluxo: `if`, `switch`, `match`
- [ ] Laços: `for`, `foreach`, `while`, `break/continue`
- [ ] Funções: parâmetros, retorno, tipagem, variádicos
- [ ] Arrays (básico): indexado/associativo
- [ ] Arrays (úteis): `array_map/filter/reduce`, `sort/usort`
- [ ] Strings: `strpos`, `substr`, `trim`, `sprintf`
- [ ] Regex básica (`preg_match`, `preg_replace`)
- [ ] Datas: `DateTime`, `DateInterval`, timezone
- [ ] Arquivos: leitura/escrita (`fopen`, `file_put_contents`)

## Fase 2 — PHP Moderno + Estrutura
- [ ] Namespaces e organização por pastas
- [ ] Composer: init, autoload PSR-4
- [ ] Exceptions (try/catch) e erros
- [ ] Tipos avançados: union, nullable, enums (se usar PHP 8.1+)
- [ ] Iterators e generators (yield)
- [ ] Princípios de design: coesão e acoplamento

## Fase 3 — POO (Sólido)
- [ ] Classes/objetos, construtor, propriedades tipadas
- [ ] Encapsulamento e visibilidade
- [ ] Herança (quando usar/evitar)
- [ ] Interfaces e polimorfismo
- [ ] Traits (quando faz sentido)
- [ ] SOLID: SRP (exercício)
- [ ] SOLID: OCP (exercício)
- [ ] SOLID: LSP (exercício)
- [ ] SOLID: ISP (exercício)
- [ ] SOLID: DIP (exercício)
- [ ] DTOs e Value Objects

## Fase 4 — Banco e HTTP
- [ ] PDO + prepared statements
- [ ] Transactions e rollback
- [ ] CRUD em camadas (Controller/Service/Repository)
- [ ] JSON: encode/decode + validação
- [ ] HTTP básico (Request/Response, status codes)
- [ ] API REST simples (sem framework)
- [ ] Autenticação básica (hash de senha, tokens)

## Fase 5 — Testes e Qualidade
- [ ] PHPUnit (unit tests)
- [ ] Mocks/stubs (conceito)
- [ ] PHPStan/Psalm (análise estática)
- [ ] CS Fixer (padronização)
- [ ] CI rodando testes/linters

## Fase 6 — Avançado
- [ ] Performance: opcache e profiling básico
- [ ] Segurança: XSS/CSRF/SQLi (visão geral)
- [ ] Design patterns: Strategy, Factory, Adapter, Decorator
- [ ] Jobs/filas (conceito)
- [ ] Framework (Laravel/Symfony) após dominar base