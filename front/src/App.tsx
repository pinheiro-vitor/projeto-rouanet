import {
  Box,
  ChakraProvider,
  Container,
  Flex,
  Heading,
} from "@chakra-ui/react";
import { useEffect, useState } from "react";
import { IProjeto } from "./@types/projeto";
import ListaProjeto from "./Components/ListaProjeto";
import ProjetoService from "./Services/ProjetoService";
import { Swiper, SwiperSlide } from "swiper/react";
import { Navigation, Pagination } from "swiper/modules";

import "swiper/css";
import "swiper/css/pagination";

function App() {
  const [projetos, setProjetos] = useState<IProjeto[]>([]);

  const fetchProjetos = async () => {
    try {
      const response = await ProjetoService.fetchAll();
      console.log("Response data:", response.data);
      setProjetos(response.data || []);
    } catch (error: any) {
      console.log("Error fetching projetos:", error.message);
    }
  };

  useEffect(() => {
    fetchProjetos();
  }, []);

  useEffect(() => {
    console.log("Projetos atualizados:", projetos); // Log para verificar atualizações no estado
  }, [projetos]);

  return (
    <ChakraProvider>
      <Flex
        minWidth="full"
        minHeight="100vh"
        justifyContent="center"
        alignItems="center"
        direction="column"
      >
        <Container minWidth="full" maxHeight="600px">
          <Heading size="md" mb="3">
            Ver outros Projetos do Proponente
          </Heading>

          {projetos && projetos.length > 0 ? (
            <Swiper
              slidesPerView={4}
              spaceBetween={30}
              navigation={true}
              grabCursor={true}
              pagination={{
                clickable: true,
              }}
              modules={[Pagination, Navigation]}
              className="mySwiper"
            >
              {projetos.map((projeto, index) => (
                <SwiperSlide key={index}>
                  <ListaProjeto projeto={projeto} />
                </SwiperSlide>
              ))}
            </Swiper>
          ) : (
            <Box>No projects found</Box>
          )}
        </Container>
      </Flex>
    </ChakraProvider>
  );
}

export default App;
