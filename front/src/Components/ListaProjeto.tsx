import {
  Badge,
  Box,
  Button,
  Card,
  CardBody,
  Divider,
  Flex,
  Heading,
  Spacer,
  Stack,
  Text,
} from "@chakra-ui/react";
import FavoriteBorderIcon from '@mui/icons-material/FavoriteBorder';
import { IProjeto } from "../@types/projeto";

interface Props {
  projeto: IProjeto;
}

export default function ListaProjeto({ projeto }: Props) {
  const formatValue = (value: number) => {
    return value.toLocaleString("pt-br", {
      style: "currency",
      currency: "BRL",
    });
  };

  const limitText = (text: string, limit: number) => {
    if (text.length <= limit) return text;
    return `${text.slice(0, limit)}...`;
  };

  return (
    <Card size="sm" height="480">
      <CardBody>
        <Flex
          direction="column"
          height="100%"
          justifyContent="space-between"
          gap="2"
        >
          <Box>
            <Badge variant="subtle" colorScheme="yellow" p="1" px="2">
              ROUANET
            </Badge>
            <Stack mt="2" spacing="3">
              <Heading title={projeto.nome} size="md">
                {limitText(projeto.nome, 35)}
              </Heading>
              <Text color="gray">
                {projeto.municipio} • {projeto.uf}
              </Text>
              <Text color="gray" title={projeto.resumo}>
                {limitText(projeto.resumo, 400)}
              </Text>
              <Flex direction="column" p="0" m="0">
                <Flex direction="row" p="0" m="0">
                  <Text width="50%" fontSize="lg">
                    Aprovado
                  </Text>
                  <Text as="b" width="50%" ml="5">
                    {formatValue(Number(projeto.valor_aprovado))}
                  </Text>
                </Flex>
                <Flex direction="row" p="0" m="0">
                  <Text width="50%" fontSize="lg">
                    Captado
                  </Text>
                  <Text as="b" width="50%" ml="5">
                    {formatValue(Number(projeto.valor_captado))}
                  </Text>
                </Flex>
              </Flex>
            </Stack>
          </Box>

          <Flex direction="row" mt="3">
            <Button
              width="90%"
              size="md"
              color="gray.400"
              fontWeight="normal"
              sx={{
                textTransform: "uppercase",
              }}
            >
              Adicionar
            </Button>
            <FavoriteBorderIcon
              sx={{
                ml: 2,
                fontSize: 40,
                color: "gray",
                stroke: "#f7fafc",
                strokeWidth: 1,
              }}
            />
          </Flex>
        </Flex>
      </CardBody>
      <Divider />
    </Card>
  );
}
